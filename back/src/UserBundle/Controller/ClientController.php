<?php

namespace UserBundle\Controller;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use UserBundle\Entity\User;

class ClientController extends Controller
{

    /**
     *
     * Get a client by ID.
     *
     * @ApiDoc(
     *     section="Client",
     *     description="Get a client by ID.",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The clients unique identifier."
     *         }
     *     }
     * )
     *
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
     *
     * Get all clients.
     *
     * @ApiDoc(
     *     section="Client",
     *     description="Get all clients."
     * )
     *
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
