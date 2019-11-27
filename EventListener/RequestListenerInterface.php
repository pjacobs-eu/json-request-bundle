<?php

namespace SymfonyBundles\JsonRequestBundle\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

interface RequestListenerInterface
{
    /**
     * @param ResponseEvent $event
     */
    public function onKernelRequest(ResponseEvent $event);
}
