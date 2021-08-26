<?php

namespace Rinsvent\Dto2DataBundle\Service\Transformer\Request\Headers;

use Rinsvent\Dto2Data\Transformer\Meta;
use Rinsvent\Dto2DataBundle\Service\Transformer\Request\AbstractResponse;

class HeaderTransformer extends AbstractResponse
{
    /**
     * @param Header $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        self::$responses[$meta->property] = $data;
    }
}