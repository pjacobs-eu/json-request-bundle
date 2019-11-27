<?php

namespace SymfonyBundles\JsonRequestBundle\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;

interface RequestListenerInterface
{
    /**
     * @param ResponseEvent $event
     */
    public function onKernelRequest(RequestEvent $event);
}
