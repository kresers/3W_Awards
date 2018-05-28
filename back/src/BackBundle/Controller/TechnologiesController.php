<?php

namespace BackBundle\Controller;


use BackBundle\Entity\Technologies;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;


class TechnologiesController extends FOSRestController
{


    /**
     * @Get(
     *     path = "/technologies/{id}",
     *     name = "app_technologie_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     *
     */
    public function showAction(Technologies $technologies)
    {
        return $technologies;
    }

    /**
     * Get all Technologies.
     *
     * @ApiDoc(
     *     section="Technologies",
     *     description="Get all Technologies."
     * )
     *
     *
     * @Get(
     *     path="/technologies",
     *     name="app_technologie_all_show"
     * )
     *
     * @Rest\View(
     *
     * )
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $allTechnos = $em->getRepository(Technologies::class)->findAll();
        return $allTechnos;
    }

    /**
     *
     * * @ApiDoc(
     *     section="Technologie",
     *     description="Create a Technologie."
     * )
     * @Post(
     *     path="/technologies",
     *     name="app_technologie_create"
     * )
     * @Rest\View(
     *     statusCode=201
     * )
     * @ParamConverter("technologie", converter="fos_rest.request_body")
     */
    public function createAction(Technologies $technologies)
    {

        $em = $this->getDoctrine()->getManager();
        $em->persist($technologies);

        return $this->view($technologies, Response::HTTP_CREATED, ['Location' => $this->generateUrl('app_color_show', ['id' => $technologies->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }

}
