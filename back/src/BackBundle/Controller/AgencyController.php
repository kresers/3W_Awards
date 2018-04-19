<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Agency;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AgencyController extends FOSRestController
{
    /**
     * Get an agency from the ID.
     *
     * @ApiDoc(
     *     section="Agency",
     *     description="Get an agency from the ID.",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The agency unique identifier."
     *         }
     *     }
     * )
     *
     * @Rest\Get(
     *     path = "/agency/{id}",
     *     name = "app_agency_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\@View
     *
     */
    public function showAction(Agency $agency)
    {
        return $agency;
    }

    /**
     * Get the list of all agencies.
     *
     * @ApiDoc(
     *     section="Agency",
     *     description="Get the list of all agencies."
     * )
     *
     * @Get(
     *     path="/agency",
     *     name="app_agency_all_show"
     * )
     *
     * @View
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agency = $em->getRepository(Agency::class)->findAll();

        return array('agency' => $agency);
    }