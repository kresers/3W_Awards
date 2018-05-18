<?php


namespace BackBundle\Controller;


use BackBundle\Entity\Customer;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CustomerController extends Controller
{
    /**
     * Get an customer from the ID.
     *
     * @ApiDoc(
     *     section="Customer",
     *     description="Get a customer from the ID.",
     *     requirements={
     *         {
     *             "name"="id",
     *             "dataType"="integer",
     *             "requirements"="\d+",
     *             "description"="The customer unique identifier."
     *         }
     *     }
     * )
     *
     * @Get(
     *     path = "/customer/{id}",
     *     name = "app_customer_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     *
     */
    public function getCustomerAction(Customer $customer)
    {
        return $customer;
    }

    /**
     * Get all customers.
     *
     * @ApiDoc(
     *     section="customers",
     *     description="Get all customers."
     * )
     *
     *
     * @Get(
     *     path="/customers",
     *     name="app_customers_all_show"
     * )
     *
     * @View
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $customer = $em->getRepository(Customer::class)->findAll();

        return array('customer' => $customer);
    }

//    /**
//     * @param User $user
//     * @return array
//     * @Rest\View()
//     * @ParamConverter("user", class="FreshApiTestBundle:User")
//     */
//    public function getUserAction(User $user)
//    {
//        return array('user' => $user);
//    }
}
