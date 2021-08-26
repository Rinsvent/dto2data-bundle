<?php

namespace Rinsvent\Dto2DataBundle\Service\Transformer\Request;

use Rinsvent\Dto2DataBundle\Service\AbstractTransformer;

abstract class AbstractResponse extends AbstractTransformer
{
    protected static array $responses;

    public static function getResponses(): array
    {
        return self::$responses;
    }
}