<?php


namespace BackBundle\Util;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Entity;
use Psr\Container\ContainerInterface;

class Crud
{
    private $em;
    private $container;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /* this function create and submit entity wich you have get in parameters*/
    public function AddOrEditEntity(Entity $entity, ContainerInterface $container, $entityName)
    {
        $entity = new Entity();
        $em = $this->em;
        $entity = $em->getRepository('BackBundle:' . $entityName)->find($entity);
    }

    public function removeEntity(Entity $entity)
    {
        $em = $this->em;
        $em->remove($entity);
        $em->flush();
    }
}
