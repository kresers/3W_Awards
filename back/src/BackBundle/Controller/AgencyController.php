<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Agency;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AgencyController extends Controller
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
     * @Get(
     *     path = "/agency/{id}",
     *     name = "app_agency_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     *
     */
    public function getAgencyAction()
    {
        return $agency;
    }

    /**
     * Get all agency.
     *
     * @ApiDoc(
     *     section="agencies",
     *     description="Get all agency."
     * )
     *
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

//    /**
//     * @param User $user
//     * @return array
//     * @Rest\View()
//     * @ParamConverter("user", class="FreshApiTestBundle:User")
//     */
//    public function getUserAction(User $user)
//    {
//        return array('user' => $user);
//    }
}
