<?php

namespace AppBundle\Twig\Extension;

use AppBundle\Entity\StaticContent;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class StaticContentExtension extends \Twig_Extension
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getName()
    {
        return 'Static_contentExtension';
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('get_content', [$this, 'getContent']),
        );
    }

    public function getContent($htmlId)
    {
        if (!$htmlId) {
            return '';
        }

        $content = $this->em
            ->getRepository('AppBundle:StaticContent')
            ->findOneByHtmlId($htmlId);
        if (!$content) {
            $content = new StaticContent();
            $content->setHtmlId($htmlId);
            $content->setHtml('Dette er en ny statisk tekst for: ' . $htmlId);

            $this->em->persist($content);
            $this->em->flush();
        }

        return $content->getHtml();
    }
}
