<?php

/*
 * This file is part of Hiveage PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Hiveage\Request\Modifiers;

use BrianFaust\Contracts\HttpClient;
use BrianFaust\Modifiers\AbstractModifier;

class ApiKeyModifier extends AbstractModifier
{
    public function apply()
    {
        $apiKey = $this->httpClient->getConfig('apiKey');

        $this->httpClient->setOption('auth', [$apiKey, '']);

        return $this->httpClient;
    }
}
