<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Semester;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StandController extends Controller
{
    /**
     * @Route("/kontrollpanel/stand/{id}", name="stand_by_semester")
     * @Route("/kontrollpanel/stand", name="stand")
     *
     * @param Semester|null $semester
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Semester $semester = null)
    {
        if ($semester === null) {
            $semester = $this->getUser()->getDepartment()->getCurrentOrLatestSemester();
        }
        $subscribers = $this->getDoctrine()->getRepository('AppBundle:AdmissionSubscriber')->findByDepartment($semester->getDepartment());
        $subscribersInSemester = $this->getDoctrine()->getRepository('AppBundle:AdmissionSubscriber')->findBySemester($semester);

        $subData = $this->get('app.admission_subscriber_statistics')->generateGraphDataFromSubscribersInSemester($subscribersInSemester, $semester);

        return $this->render('stand_admin/stand.html.twig', [
            'semester' => $semester,
            'subscribers' => $subscribers,
            'subscribers_in_semester' => $subscribersInSemester,
            'subData' => $subData,
        ]);
    }
}
