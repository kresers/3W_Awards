<?php


namespace BackBundle\Controller;

use BackBundle\Entity\VoteCriteria;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class VoteCriteriaController extends Controller
{
    /**
     * Get all vote criterias awards
     *
     * @ApiDoc(
     *     section="votecriterias",
     *     description="Get all vote criterias"
     * )
     *
     *
     * @Rest\Get(
     *     path="/votecriteria",
     *     name="app_vote_criteria_all_show"
     * )
     *
     * @Rest\View()
     */
    public function getAllVoteCriteriaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $voteCriterias = $em->getRepository(VoteCriteria::class)->findAll();

        return $voteCriterias;
    }

    /**
     * Get a vote criteria from the ID.
     *
     * @ApiDoc(
     *     section="votecriteria",
     *     description="Get an vote criteria award from the ID.",
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
     *     path = "/votecriteria/{id}",
     *     name = "app_vote_criteria_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View()
     *
     */
    public function getVoteCriteriaAction(VoteCriteria $voteCriteria)
    {
        return $voteCriteria;
    }

}
