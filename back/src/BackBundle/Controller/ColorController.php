<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 25/05/2018
 * Time: 15:14
 */

namespace BackBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use BackBundle\Entity\Colors;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;



class ColorController extends FOSRestController
{
    /**
     * Get an website from the ID.
     *
     ** @ApiDoc(
     *     section="Color",
     *     description="Get a Color with his ID."
     * )
     *
     * @Get(
     *     path = "/colors/{id}",
     *     name = "app_color_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View(
     *     statusCode=200
     * )
     */
    public function showAction(Colors $colors)
    {

        return $colors;
    }

    /**
     * Get all Colors.
     *
     * @ApiDoc(
     *     section="Color",
     *     description="Get all colors."
     * )
     *
     *
     * @Get(
     *     path="/colors",
     *     name="app_colors_all_show"
     * )
     *
     * @Rest\View(
     *
     * )
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $allColors = $em->getRepository(Colors::class)->findAll();
        return $allColors;
    }

    /**
     *
     * * @ApiDoc(
     *     section="Website",
     *     description="Create a Color."
     * )
     * @Post(
     *     path="/colors",
     *     name="app_color_create"
     * )
     * @Rest\View(
     *     statusCode=201
     * )
     * @ParamConverter("color", converter="fos_rest.request_body")
     */
    public function createAction(Colors $colors)
    {

        $em = $this->getDoctrine()->getManager();
        $em->persist($colors);

        return $this->view($colors, Response::HTTP_CREATED, ['Location' => $this->generateUrl('app_color_show', ['id' => $colors->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }
}