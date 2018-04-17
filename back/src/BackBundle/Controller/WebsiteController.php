<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Project;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebsiteController extends Controller
{
    /**
     * @return array
     * @Rest\View()
     */
    public function getWebsitesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $allwebsite = $em->getRepository(Project::class)->findAll();

        return array('website' => $allwebsite);
    }

}