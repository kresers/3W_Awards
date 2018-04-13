<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use UserBundle\Entity\User;

class UsersController extends Controller
{

    /**
     * @return array
     * @Rest\View()
     * @ParamConverter("user", class="UserBundle:User")
     */
    public function getUserAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user= $em->getRepository(User::class)->findAll();

        return array('user' => $user);
    }
}
