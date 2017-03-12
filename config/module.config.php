<?php

use ZF\ContentNegotiation\JsonModel;
use ZF\ContentNegotiation\XML\View\XmlModel;

return [
    'zf-content-negotiation' => [
        'selectors' => [
            'HalJsonXML' => [
                XmlModel::class => [
                    'application/xml',
                    'application/*+xml',
                ],
                JsonModel::class => [
                    'application/json',
                    'application/*+json',
                ],
            ],
        ],
    ],
];
