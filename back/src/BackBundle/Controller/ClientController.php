<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Agency;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;


class ClientController extends Controller
{
    /**
     * @Rest\Get(
     *     path = "/client",
     *     name = "app_client_get"
     * )
     */
    public function getAction()
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository(User::class)->findAll();
        return array('client' => $client);
    }

    /**
     * @Rest\Get(
     *     path = "/client/{id}",
     *     name = "app_client_show",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("user", converter="fos_rest.request_body")
     */
    public function showAction(User $client)
    {

    }

    /**
     * @Rest\Post("/client/create")
     * @Rest\View(StatusCode = 201)
     * @ParamConverter("user", converter="fos_rest.request_body")
     */
    public function createAction(User $client)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
        $em->flush();
        return $client;
    }
}