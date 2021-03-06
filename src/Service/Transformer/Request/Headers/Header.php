<?php

namespace Rinsvent\DTO2DataBundle\Service\Transformer\Request\Headers;

use Rinsvent\DTO2Data\Transformer\Meta;

#[\Attribute]
class Header extends Meta
{
    public function __construct(
        public string $property,
        public array $tags = ['response_headers']
    ) {
        parent::__construct($tags);
    }
}