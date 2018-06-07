<?php


namespace BackBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations\View;
use \Firebase\JWT\JWT;


class UserController extends FOSRestController
{

    /**
     * @Rest\Get(
     *     path = "/user/{username}",
     *     name = "app_user_get"
     * )
     * @Rest\View()
     */
    public function getAction($username, Request $request)
    {
        $credential = $this->get('lexik_jwt_authentication.security.guard.jwt_token_authenticator')->getCredentials($request); // get token in the request
        $this->get('back.providers.token_authorization')->RestrictForCurrentUser($credential,$username); // restrict api for current User
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(
            [
                'username' => $username
            ]
        );
        return  $user;
    }


    /**
     * @Rest\Post("/user/")
     */
    public function postAction(Request $request)
    {
        $data = new User();
        $firstName = $request->get('firstName');
        $email = $request->get('email');
        $password = $request->get('password');
        $lastName = $request->get('lastName');

        // si les valeur transmise son null
        if (empty($firstName) || empty($email) || empty($password) || empty($lastName)) {
            return new \FOS\RestBundle\View\View('Tous les paramètres doivent être renseigné', Response::HTTP_NOT_ACCEPTABLE);
        }
        $data->setRoles(['ROLE_MEMBRE']);
        $data->setEmailCanonical($email);
        $data->setEmail($email);
        $data->setUsername($lastName);
        $data->setEnabled(1);
        $data->setPlainPassword($password);
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new \FOS\RestBundle\View\View("Inscription validé", Response::HTTP_OK);
    }
}