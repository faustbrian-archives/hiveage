<?php

declare(strict_types=1);

/*
 * This file is part of Hiveage PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Hiveage\API;

class Trips extends AbstractAPI
{
    /**
     * @param array $trip_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $trip_category): HttpResponse
    {
        return $this->client->post('categories/trips', compact('trip_category'));
    }

    /**
     * @param $tripId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(int $tripId): HttpResponse
    {
        return $this->client->get("categories/trips/{$tripId}");
    }

    /**
     * @param $tripId
     * @param array $trip_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $tripId, array $trip_category): HttpResponse
    {
        return $this->client->put("categories/trips/{$tripId}", compact('trip_category'));
    }

    /**
     * @param $tripId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy(int $tripId): HttpResponse
    {
        return $this->client->delete("categories/trips/{$tripId}");
    }

    /**
     * @param int    $page
     * @param int    $per_page
     * @param string $order
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(int $page = 1, int $per_page = 20, string $order = 'asc'): HttpResponse
    {
        return $this->client->get('categories/trips', compact('page', 'per_page', 'order'));
    }
}
