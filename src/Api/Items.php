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
 * Class Items.
 */
class Items extends AbstractApi
{
    /**
     * @param array $item_category
     *
     * @return mixed|object
     */
    public function create(array $item_category)
    {
        $this->setFormParameters(compact('item_category'));

        $response = $this->post('categories/items');

        return $this->hydrateOne($response);
    }

    /**
     * @param $itemId
     *
     * @return mixed|object
     */
    public function retrieve($itemId)
    {
        $response = $this->get('categories/items/'.$itemId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $itemId
     * @param array $item_category
     *
     * @return mixed|object
     */
    public function update($itemId, array $item_category)
    {
        $this->setFormParameters(compact('item_category'));

        $response = $this->put('categories/items/'.$itemId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $itemId
     *
     * @return mixed|object
     */
    public function destroy($itemId)
    {
        $response = $this->delete('categories/items/'.$itemId);

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

        $response = $this->get('categories/items');

        return $this->hydrateOne($response);
    }
}
