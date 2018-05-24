<?php


namespace BackBundle\Controller;

use BackBundle\Entity\CategoryAwards;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategAwardsController extends Controller
{
    /**
     * Get all categories of Awards
     *
     * @ApiDoc(
     *     section="awards",
     *     description="Get all categories of awards."
     * )
     *
     *
     * @Rest\Get(
     *     path="/award/category",
     *     name="app_award_category_all_show"
     * )
     *
     * @Rest\View()
     */
    public function getAwardsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoryAwards = $em->getRepository(CategoryAwards::class)->findAll();

        return $categoryAwards;
    }

    /**
     * Get a categ award from the ID.
     *
     * @ApiDoc(
     *     section="categawards",
     *     description="Get an categ award from the ID.",
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
     *     path = "/award/category/{id}",
     *     name = "app_categ_award_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View()
     *
     */
    public function getCategAwardAction(CategoryAwards $categAward)
    {
        return $categAward;
    }

}
