<?php

namespace BackBundle\Controller;

use BackBundle\Entity\Parameters;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ParametersController extends Controller
{


    /**
     * @Route("/parameters", name="back_parameters")
     * Description : this function return the list of Obj
     * @Template
     */
    public function indexAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $parameters = new Parameters();
        $data = $this->get('back.util.crud')->AddOrEditEntity($parameters);
        // change this to parameters
        return $this->render('@Back/Home/parameters.html.twig');
    }


}
