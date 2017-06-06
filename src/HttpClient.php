<?php

/*
 * This file is part of Hiveage PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Hiveage;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\Hiveage\Request\Modifiers\ApiKeyModifier;
use BrianFaust\Hiveage\Request\Modifiers\SubdomainModifier;

/**
 * Class HttpClient.
 */
class HttpClient extends AbstractHttpClient
{
    /**
     * {@inheritdoc}
     */
    protected $options = [
        'headers' => [
           'User-Agent' => 'Hiveage-PHP-Client/0.1.0',
           'Accept' => 'application/json',
        ],
    ];

    protected $requestModifiers = [
        SubdomainModifier::class,
        ApiKeyModifier::class,
    ];
}
