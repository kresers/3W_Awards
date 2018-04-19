<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Project;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class WebsiteController extends FOSRestController
{
    /**
     * @Rest\Get(
     *     path = "/website/{id}",
     *     name = "app_website_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     *
     */
    public function showAction()
    {
        $website = new Project();
        $website->setDevLanguages('Symfony');
        return $website;
    }

    /**
     * @Rest\Get(
     *     path="/websites",
     *     name="app_websites_all_show"
     * )
     *
     * @Rest\View
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $allWebsites = $em->getRepository(Project::class)->findAll();
        return $allWebsites;
    }

    /**
     * @Rest\Post(
     *     path="/websites",
     *     name="app_website_create"
     * )
     * @Rest\View(
     *     statusCode=201
     * )
     * @ParamConverter("project", converter="fos_rest.request_body")
     */
    public function createAction(Project $project)
    {

        $em = $this->getDoctrine()->getManager();

        $em->persist($project);
        dump($project); die();

        return $this->view($project, Response::HTTP_CREATED, ['Location' => $this->generateUrl('app_website_show', ['id' => $project->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }

}