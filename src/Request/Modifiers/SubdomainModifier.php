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

class SubdomainModifier extends AbstractModifier
{
    public function apply()
    {
        $username = $this->httpClient->getConfig('username');

        $this->httpClient->setOption('base_uri', 'https://'.$username.'.hiveage.com/api/');

        return $this->httpClient;
    }
}
