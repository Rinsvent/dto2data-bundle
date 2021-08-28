<?php

namespace Rinsvent\DTO2DataBundle\Service\Transformer\Request\Headers;

use Rinsvent\DTO2Data\Transformer\Meta;
use Rinsvent\DTO2DataBundle\Service\AbstractTransformer;
use Rinsvent\DTO2DataBundle\Storage\Response\Header as HeaderStorage;

class HeaderTransformer extends AbstractTransformer
{
    /**
     * @param Header $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        HeaderStorage::set($meta->property, clone $data);
    }
}