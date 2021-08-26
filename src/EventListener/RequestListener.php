<?php

namespace Rinsvent\Dto2DataBundle\EventListener;

use Rinsvent\Dto2Data\Resolver\TransformerResolverStorage;
use Rinsvent\Dto2DataBundle\Service\ServiceResolver;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestListener
{
    public function __construct(
        private ServiceResolver $serviceResolver
    ) {}

    public function onKernelRequest(RequestEvent $event)
    {
        $storage = TransformerResolverStorage::getInstance();
        $storage->add(ServiceResolver::TYPE, $this->serviceResolver);
    }
}
