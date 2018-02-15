<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="back_home")
     * Description : this function return the list of Obj
     * @Template
     */
    public function indexAction()
    {
        return $this->render('@Back/Home/index.html.twig');
    }

    /**
     * @Route("/form", name="back_form")
     *
     */
    public function formAction(Request $request)
    {
        $testFormRepository = $this->getDoctrine()->getManager()->getRepository('BackBundle:TestForm');
        $listForm = $testFormRepository->findAll();

        $testForm = new TestForm();

        $form = $this->createForm(TestFormType::class,$testForm);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($testForm);
            $em->flush();
            return $this->redirectToRoute('back_form');
        }
        $formview = $form->createView();
        return $this->render('@Back/Home/formulaire.html.twig',array('lesForm'=>$listForm,'form'=>$formview));
    }
}
