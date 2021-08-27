<?php

namespace Rinsvent\Dto2DataBundle\Service\Transformer\Request\Headers;

use Rinsvent\Dto2Data\Transformer\Meta;
use Rinsvent\Dto2DataBundle\Service\AbstractTransformer;
use Rinsvent\Dto2DataBundle\Storage\Response\Header as HeaderStorage;

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