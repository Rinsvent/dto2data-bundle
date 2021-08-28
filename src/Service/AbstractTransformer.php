<?php

namespace Rinsvent\DTO2DataBundle\Service;

use Rinsvent\DTO2Data\Transformer\TransformerInterface;

abstract class AbstractTransformer implements TransformerInterface
{
    public static function getLocatorKey()
    {
        return static::class;
    }
}
