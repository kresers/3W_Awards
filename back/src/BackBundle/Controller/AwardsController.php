<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Awards;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AwardsController extends Controller
{
    /**
 * Get all awards
 *
 * @ApiDoc(
 *     section="awards",
 *     description="Get all awards."
 * )
 *
 *
 * @Rest\Get(
 *     path="/award",
 *     name="app_award_all_show"
 * )
 *
 * @Rest\View()
 */
    public function getAwardsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $awards = $em->getRepository(Awards::class)->findAll();

        return $awards;
    }



    /**
     * Get an award from the ID.
     *
     * @ApiDoc(
     *     section="awards",
     *     description="Get an award from the ID.",
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
     *     path = "/award/{id}",
     *     name = "app_award_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View()
     *
     */
    public function getAwardAction(Awards $award)
    {
        return $award;
    }

}
