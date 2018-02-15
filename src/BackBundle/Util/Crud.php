<?php


namespace BackBundle\Util;

use Doctrine\ORM\Mapping\Entity;
use Psr\Container\ContainerInterface;


class Crud
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /* this function create and submit entity wich you have get in parameters*/
    public function AddOrEditEntity(Entity $entity)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $form = 
    }
}