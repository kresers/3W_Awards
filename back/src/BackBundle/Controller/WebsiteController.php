<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Project;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

class WebsiteController
{
    /**
     * @Get(
     *     path = "/website/{id}",
     *     name = "app_website_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function showAction()
    {
        $website = new  Project();
        $website->setProjectName('Test');
        return $website;
    }

}