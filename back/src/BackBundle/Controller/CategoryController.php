<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Category;
use BackBundle\Entity\CategoryAwards;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategoryController extends Controller
{
    /**
     * Get all categories
     *
     * @ApiDoc(
     *     section="categories",
     *     description="Get all categories."
     * )
     *
     *
     * @Rest\Get(
     *     path="/categories",
     *     name="app_category_all_show"
     * )
     *
     * @Rest\View()
     */
    public function getCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category::class)->findBy([],['name' => 'ASC']);

        return $category;
    }


}
