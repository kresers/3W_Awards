<?php

namespace BackBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;

class SubmitListener
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function postPersist(LifecycleEventArgs $event)
    {
        $this->onSubmitChangeListener($event);
    }

    public function onSubmitChangeListener(LifecycleEventArgs $event)
    {
        //On récupeère l'objet du formulaire et l'entityManager
        $statesubmit = $event->getObject();
        $em = $this->container->get('doctrine')->getEntityManager();

        // On récupere le nom de l'entité afin de le passer au getRepository de manière dynamique
        $entityName = $em->getMetadataFactory()->getMetadataFor(get_class($statesubmit))->getName();
        $repository = $this->container->get('doctrine')->getManager()->getRepository($entityName);

        //findOneBy pour avoir l'objet en bdd                   $statesubmit->getCode()
        $objectExist = $repository->findOneBy(array('libelle'=> $statesubmit->getLibelle()));

        //Si l'object est définie alors on return un new Response
        if(isset($objectExist))
        {
            return new Response('la valeur que vous souhaitez ajouter existe déjà');
        }
        else
        {
            return true;
        }
        // return true
        // sinon
        // return une httpResponse('la valeur que vous souhaitez ajouter existe déja')
        // si il n'existe
    }
}