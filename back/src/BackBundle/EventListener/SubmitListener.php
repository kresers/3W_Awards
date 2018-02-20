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
        $statesubmit = $event->getObject();
        $em = $this->container->get('doctrine')->getEntityManager();
        // tu vas récuperer l'object en base par le code bia un findByOne sur le code(libelle_id)
        // si il n'existe pas
        $object = $statesubmit;

        $entityName = $em->getMetadataFactory()->getMetadataFor(get_class($object))->getName();
        $repository = $this->container->get('doctrine')->getManager()->getRepository($entityName);
        $searchedObject = $repository->findOneBy(array('libelle'=> $object->getLibelle()));
        dump($object);

        /*if ($object->getLibelle() !== $searchedObject->getLibelle())
        {
            return new Response('la valeur que vous souhaitez ajouter existe déjà');
        }
        else
        {
            return true;
        }*/
        // return true
        // sinon
        // return une httpResponse('la valeur que vous souhaitez ajouter existe déja')
        // si il n'existe
    }
}