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

use BrianFaust\Http\HttpResponse;

class Items extends AbstractAPI
{
    /**
     * @param array $item_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $item_category): HttpResponse
    {
        return $this->client->post('categories/items', compact('item_category'));
    }

    /**
     * @param $itemId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(int $itemId): HttpResponse
    {
        return $this->client->get("categories/items/{$itemId}");
    }

    /**
     * @param $itemId
     * @param array $item_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $itemId, array $item_category): HttpResponse
    {
        return $this->client->put("categories/items/{$itemId}", compact('item_category'));
    }

    /**
     * @param $itemId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy($itemId): HttpResponse
    {
        return $this->client->delete("categories/items/{$itemId}");
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
        return $this->client->get('categories/items', compact('page', 'per_page', 'order'));
    }
}
