<?php


namespace BackBundle\Api;


use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserAPI extends Controller

{
    /**
     * @Rest\Get("/users")
     */
    public function randomAction()
    {
        $em = $this->getDoctrine();
        $users = $em->getRepository('UserBundle:User')->findAll();
    }
}