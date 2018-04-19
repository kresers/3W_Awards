<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 19/04/2018
 * Time: 15:12
 */

namespace BackBundle\Controller;

namespace BackBundle\Controller;

use BackBundle\Entity\Technologies;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class TechnologiesController extends FOSRestController
{


    /**
     * @Rest\Get(
     *     path = "/technlogie/{id}",
     *     name = "app_technologie_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     *
     */
    public function showAction(Technologies $technologies)
    {
        return $technologies;
    }

    /**
     * @Rest\Post(
     *     path="/technologies",
     *     name="app_technologie_create"
     * )
     * @Rest\View(
     *     statusCode=201
     * )
     * @ParamConverter("technologies", converter="fos_rest.request_body")
     */
    public function createAction(Technologies $technologies)
    {

        $em = $this->getDoctrine()->getManager();

        $em->persist($technologies);
        $em->flush($technologies);

        return $technologies;
    }

}