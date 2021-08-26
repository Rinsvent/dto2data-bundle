<?php

namespace Rinsvent\Dto2DataBundle\Service;

use Rinsvent\Dto2Data\Transformer\TransformerInterface;

abstract class AbstractTransformer implements TransformerInterface
{
    public static function getLocatorKey()
    {
        return static::class;
    }
}
