<?php


namespace BackBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class SubmitListener
{
    public function onSubmitChangeListener(LifecycleEventArgs $event)
    {
        $statesubmit = $event->getObject();
        dump($statesubmit);
        die;
    }
}