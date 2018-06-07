<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Contact;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;


class ContactController extends FOSRestController
{
    /**
     *
     *
     ** @ApiDoc(
     *     section="Contact",
     *     description="Get a contact with his ID."
     * )
     *
     * @Get(
     *     path = "/contact/{id}",
     *     name = "app_contact_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View(
     *     statusCode=200
     * )
     */
    public function getMessageAction(Contact $contact)
    {
        return $contact;
    }

    /**
     *
     * * @ApiDoc(
     *     section="Contact",
     *     description="Create a Contact."
     * )
     * @Post(
     *     path="/contact",
     *     name="app_contact_create"
     * )
     * @View(
     *     statusCode=201
     * )
     * @ParamConverter("contact", converter="fos_rest.request_body")
     */

    public function createContactAction(Contact $contact){
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();
        return $this->view($contact, Response::HTTP_CREATED, ['Location' => $this->generateUrl('app_contact_show', ['id' => $contact->getId(), UrlGeneratorInterface::ABSOLUTE_URL])]);
    }
}