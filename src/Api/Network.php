<?php

/*
 * This file is part of Hiveage PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Hiveage\Api;

use BrianFaust\Unified\AbstractApi;

/**
 * Class Network.
 */
class Network extends AbstractApi
{
    /**
     * @param array $network
     *
     * @return mixed|object
     */
    public function create(array $network)
    {
        $this->setFormParameters(compact('network'));

        $response = $this->post('network');

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     *
     * @return mixed|object
     */
    public function retrieve($networkHashKey)
    {
        $response = $this->get('network/'.$networkHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param array $network
     *
     * @return mixed|object
     */
    public function update($networkHashKey, array $network)
    {
        $this->setFormParameters(compact('network'));

        $response = $this->put('network/'.$networkHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     *
     * @return mixed|object
     */
    public function destroy($networkHashKey)
    {
        $response = $this->delete('network/'.$networkHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param int    $page
     * @param int    $per_page
     * @param string $order
     *
     * @return mixed|object
     */
    public function all($page = 1, $per_page = 20, $order = 'asc')
    {
        $this->setQuery(compact('page', 'per_page', 'order'));

        $response = $this->get('network');

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param int $page
     * @param int $per_page
     *
     * @return mixed|object
     */
    public function invoiceActivities($networkHashKey, $page = 1, $per_page = 20)
    {
        $this->setQuery(compact('per_page', 'page'));

        $response = $this->get('network/'.$networkHashKey.'/invoices');

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param int $page
     * @param int $per_page
     *
     * @return mixed|object
     */
    public function estimateActivities($networkHashKey, $page = 1, $per_page = 20)
    {
        $this->setQuery(compact('per_page', 'page'));

        $response = $this->get('network/'.$networkHashKey.'/estimates');

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param int $page
     * @param int $per_page
     *
     * @return mixed|object
     */
    public function recurringInvoicesActivities($networkHashKey, $page = 1, $per_page = 20)
    {
        $this->setQuery(compact('per_page', 'page'));

        $response = $this->get('network/'.$networkHashKey.'/recurring_invoices');

        return $this->hydrateOne($response);
    }
}
