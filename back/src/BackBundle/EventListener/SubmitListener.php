<?php


namespace BackBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;

class SubmitListener
{

    public function postPersist(LifecycleEventArgs $event)
    {
        $this->onSubmitChangeListener($event);
    }

    public function onSubmitChangeListener(LifecycleEventArgs $event)
    {
        $statesubmit = $event->getObject();
    }
}