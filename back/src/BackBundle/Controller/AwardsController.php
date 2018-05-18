<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Awards;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AwardsController extends Controller
{
    /**
     * @return array
     * @Rest\View()
     */
    public function getAwardsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $awards = $em->getRepository(Awards::class)->findAll();

        return array('awards' => $awards);
    }

}
