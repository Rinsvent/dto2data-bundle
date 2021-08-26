<?php

namespace Rinsvent\Dto2DataBundle\Service;

use Rinsvent\Dto2Data\Resolver\TransformerResolverInterface;
use Rinsvent\Dto2Data\Transformer\Meta;
use Rinsvent\Dto2Data\Transformer\TransformerInterface;
use Symfony\Component\DependencyInjection\ServiceLocator;

class ServiceResolver implements TransformerResolverInterface
{
    public const TYPE = 'service';

    public function __construct(
        private ServiceLocator $transformerLocator
    ) {}

    public function resolve(Meta $meta): TransformerInterface
    {
        $transformerClass = $meta::class . 'Transformer';
        return $this->transformerLocator->get($transformerClass);
    }
}