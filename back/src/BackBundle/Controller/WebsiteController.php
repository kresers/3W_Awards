<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Project;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WebsiteController extends Controller
{
    /**
     * Get an website from the ID.
     *
     * @ApiDoc(
     *     section="Website",
     *     description="Get an website from the ID.",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The websites unique identifier."
     *         }
     *     }
     * )
     *
     *
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
     * Get all websites.
     *
     * @ApiDoc(
     *     section="Website",
     *     description="Get all websites."
     * )
     *
     *
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
