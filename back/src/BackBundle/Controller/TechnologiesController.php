<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 19/04/2018
 * Time: 15:12
 */

namespace BackBundle\Controller;


use BackBundle\Entity\Technologies;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\Post;


class TechnologiesController extends FOSRestController
{


    /**
     * @Get(
     *     path = "/technologie/{id}",
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
     * @Post(
     *     path="/technologies",
     *     name="app_technologie_create"
     * )
     * @View(
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
