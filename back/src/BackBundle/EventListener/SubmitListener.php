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
    }
}
