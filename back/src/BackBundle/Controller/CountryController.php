<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Agency;
use BackBundle\Entity\Country;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CountryController extends Controller
{
    /**
     * Get all country.
     *
     * @ApiDoc(
     *     section="country",
     *     description="Get all country"
     * )
     *
     *
     * @Get(
     *     path="/countries",
     *     name="app_country_all_show"
     * )
     *
     * @View
     */
    public function showAllAction()
    {
        return $this->getDoctrine()->getRepository(Country::class)->findBy([],['label' => 'ASC']);
    }
}
