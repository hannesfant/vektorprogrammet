<?php

namespace AppBundle\Entity\Repository;

use AppBundle\Entity\Department;
use AppBundle\Entity\SocialEvent;
use \Doctrine\ORM\EntityRepository;
use \AppBundle\Entity\Semester;


/**
 * Class SocialEventItemRepository
 */
class SocialEventItemRepository extends EntityRepository
{

    /**
     * @param Semester $semester
     * @param Department $department
     * @return array
     */
    public function findSocialEventsBySemesterAndDepartment(Semester $semester, Department $department)
    {
        $socialEvents = $this->createQueryBuilder('SocialEventItem')
            ->select('SocialEventItem')
            ->where('SocialEventItem.semester = :semester or SocialEventItem.semester is null')
            ->andWhere('SocialEventItem.department = :department or SocialEventItem.department is null')
            #->andWhere('SocialEventItem.deletedAt > :semesterEndDate or SocialEventItem.deletedAt is null')


            ->setParameter('semester', $semester)
            ->setParameter('department', $department)
            #->setParameter('semesterEndDate', $semester->getSemesterEndDate())
            ->getQuery()
            ->getResult();

        # $filteredItems = array_filter($socialEvents, function (SocialEvent $socialEvent) use ($semester) {
        #     if (empty($socialEvent->getSemester())) {
        #         return (
        #             $socialEvent->getCreatedAt() < $semester->getSemesterEndDate() &&
        #             (empty($socialEvent->getDeletedAt())? true : $socialEvent->getDeletedAt() > $semester->getSemesterStartDate()));
        #     } else {
        #         return true;
        #     }
        # });//
        #return $filteredItems;
        return $socialEvents;
    }


}