<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Country;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;

class CountryController extends FOSRestController
{

    /**
     * Get all Colors.
     *
     * @ApiDoc(
     *     section="country",
     *     description="Get all country."
     * )
     *
     *
     * @Get(
     *     path="/country",
     *     name="app_country_all_show"
     * )
     *
     * @Rest\View(
     *
     * )
     */
    public function showAllAction(){
        $em = $this->getDoctrine()->getManager();
        $allCountry = $em->getRepository(Country::class)->findAll();
        return $allCountry;
    }


    /**
     * Get an website from the ID.
     *
     ** @ApiDoc(
     *     section="Country",
     *     description="Get a Country with his ID."
     * )
     *
     * @Get(
     *     path = "/country/{id}",
     *     name = "app_country_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View(
     *     statusCode=200
     * )
     */
    public function showAction(Country $country) {
        return $country;
    }
}
