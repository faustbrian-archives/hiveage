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
 * Class Trips.
 */
class Trips extends AbstractApi
{
    /**
     * @param array $trip_category
     *
     * @return mixed|object
     */
    public function create(array $trip_category)
    {
        $this->setFormParameters(compact('trip_category'));

        $response = $this->post('categories/trips');

        return $this->hydrateOne($response);
    }

    /**
     * @param $tripId
     *
     * @return mixed|object
     */
    public function retrieve($tripId)
    {
        $response = $this->get('categories/trips/'.$tripId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $tripId
     * @param array $trip_category
     *
     * @return mixed|object
     */
    public function update($tripId, array $trip_category)
    {
        $this->setFormParameters(compact('trip_category'));

        $response = $this->put('categories/trips/'.$tripId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $tripId
     *
     * @return mixed|object
     */
    public function destroy($tripId)
    {
        $response = $this->delete('categories/trips/'.$tripId);

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

        $response = $this->get('categories/trips');

        return $this->hydrateOne($response);
    }
}
