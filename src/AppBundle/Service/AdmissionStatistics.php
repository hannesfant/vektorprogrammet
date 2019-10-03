<?php


namespace AppBundle\Service;

use AppBundle\Entity\AdmissionPeriod;
use AppBundle\Entity\AdmissionSubscriber;
use AppBundle\Entity\Application;
use AppBundle\Entity\PeriodInterface;
use AppBundle\Entity\Semester;

class AdmissionStatistics
{

    /**
     * @param AdmissionSubscriber[] $subscribers
     * @param Semester $semester
     *
     * @return array
     */
    public function generateGraphDataFromSubscribersInSemester($subscribers, Semester $semester)
    {
        $subData = $this->initializeDataArray($semester);
        return $this->populateSubscriberDataWithSubscribers($subData, $subscribers);
    }

    /**
     * @param Application[] $applications
     * @param AdmissionPeriod $admissionPeriod
     *
     * @return array
     */
    public function generateGraphDataFromApplicationsInSemester($applications, AdmissionPeriod $admissionPeriod)
    {
        $appData = $this->initializeDataArray($admissionPeriod, 5);
        return $this->populateApplicationDataWithApplications($appData, $applications);
    }

    /**
     * @param Application[] $applications
     * @param AdmissionPeriod $admissionPeriod
     *
     * @return array
     */
    public function generateCumulativeGraphDataFromApplicationsInSemester($applications, AdmissionPeriod $admissionPeriod)
    {
        $appData = $this->initializeDataArray($admissionPeriod, 5);
        return $this->populateCumulativeApplicationDataWithApplications($appData, $applications);
    }

    private function initializeDataArray(PeriodInterface $admissionPeriod, int $extraDays = 0)
    {
        $subData = [];

        $now = new \DateTime();
        $days = $admissionPeriod->getStartDate()->diff($now)->days;
        if ($now > $admissionPeriod->getEndDate()) {
            $days = $admissionPeriod->getStartDate()->diff($admissionPeriod->getEndDate())->days;
        }

        $days += $extraDays;

        $start = $admissionPeriod->getStartDate()->format('Y-m-d');
        for ($i = 0; $i < $days; $i++) {
            $date = (new \DateTime($start))->modify("+$i days")->format('Y-m-d');
            $subData[$date] = 0;
        }

        return $subData;
    }

    /**
     * @param array $appData
     * @param Application[] $applications
     *
     * @return array
     */
    private function populateApplicationDataWithApplications($appData, $applications)
    {
        foreach ($applications as $application) {
            $date = $application->getCreated()->format('Y-m-d');
            if (!isset($appData[$date])) {
                $appData[$date] = 0;
            }
            $appData[$date]++;
        }
        ksort($appData);

        return $appData;
    }

    /**
     * @param array $appData
     * @param Application[] $applications
     *
     * @return array
     */
    private function populateCumulativeApplicationDataWithApplications($appData, $applications)
    {
        $populatedAppData = $this->populateApplicationDataWithApplications($appData, $applications);
        $dates = array_keys($populatedAppData);
        foreach ($populatedAppData as $date => $count) {
            $index = array_search($date, $dates);
            if ($index === false || $index === 0) {
                continue;
            }
            $cumulative = $populatedAppData[$dates[$index-1]];
            $populatedAppData[$date] = $populatedAppData[$date] + $cumulative;
        }

        return $populatedAppData;
    }

    /**
     * @param array $subData
     * @param AdmissionSubscriber[] $subscribers
     *
     * @return array
     */
    private function populateSubscriberDataWithSubscribers($subData, $subscribers)
    {
        foreach ($subscribers as $subscriber) {
            $date = $subscriber->getTimestamp()->format('Y-m-d');
            if (!isset($subData[$date])) {
                $subData[$date] = 0;
            }
            $subData[$date]++;
        }
        ksort($subData);

        return $subData;
    }
}
