<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Blog;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller
{
    /**
     * @return array
     * @Rest\View()
     */
    public function getBlogAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository(Blog::class)->findAll();

        return array('blog' => $blog);
    }

}
