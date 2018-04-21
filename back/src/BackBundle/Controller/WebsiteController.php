<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Project;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebsiteController extends Controller
{
    /**
     * @Get(
     *     path = "/website/{id}",
     *     name = "app_website_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     *
     */
    public function showAction()
    {
        $website = new Project();
        $website->setDevLanguages('Symfony');
        return $website;
    }

    /**
     * @Get(
     *     path="/websites",
     *     name="app_websites_all_show"
     * )
     *
     * @View
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $allWebsites = $em->getRepository(Project::class)->findAll();
        return $allWebsites;
    }


}