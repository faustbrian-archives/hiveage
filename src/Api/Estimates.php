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
 * Class Estimates.
 */
class Estimates extends AbstractApi
{
    /**
     * @param array $estimate
     *
     * @return mixed|object
     */
    public function create(array $estimate)
    {
        $this->setFormParameters(compact('estimate'));

        $response = $this->post('estm/'.$estimateHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $estimateHashKey
     *
     * @return mixed|object
     */
    public function retrieve($estimateHashKey)
    {
        $response = $this->get('estm/'.$estimateHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $estimateHashKey
     * @param array $estimate
     *
     * @return mixed|object
     */
    public function update($estimateHashKey, array $estimate)
    {
        $this->setFormParameters(compact('estimate'));

        $response = $this->put('estm/'.$estimateHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $estimateHashKey
     *
     * @return mixed|object
     */
    public function destroy($estimateHashKey)
    {
        $response = $this->delete('estm/'.$estimateHashKey);

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

        $response = $this->get('estm');

        return $this->hydrateOne($response);
    }

    /**
     * @param $estimateHashKey
     * @param array $estimate
     *
     * @return mixed|object
     */
    public function sendInvoice($estimateHashKey, array $estimate)
    {
        $this->setFormParameters(compact('estimate'));

        $response = $this->post('estm/'.$estimateHashKey.'/deliver');

        return $this->hydrateOne($response);
    }
}
