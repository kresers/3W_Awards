<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;

class ClientController extends Controller
{

    /**
     * @Get(
     *     path = "/client/{id}",
     *     name = "app_client_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     *
     */
    public function showAction(User $client)
    {
        return $client;
    }

    /**
     * @Get(
     *     path="/client",
     *     name="app_client_all_show"
     * )
     *
     * @View
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $allClients = $em->getRepository(User::class)->findAll();
        return $allClients;
    }
}
