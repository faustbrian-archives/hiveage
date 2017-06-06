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
 * Class Tasks.
 */
class Tasks extends AbstractApi
{
    /**
     * @param array $task_category
     *
     * @return mixed|object
     */
    public function create(array $task_category)
    {
        $this->setFormParameters(compact('task_category'));

        $response = $this->post('categories/tasks');

        return $this->hydrateOne($response);
    }

    /**
     * @param $taskId
     *
     * @return mixed|object
     */
    public function retrieve($taskId)
    {
        $response = $this->get('categories/tasks/'.$taskId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $taskId
     * @param array $task_category
     *
     * @return mixed|object
     */
    public function update($taskId, array $task_category)
    {
        $this->setFormParameters(compact('task_category'));

        $response = $this->put('categories/tasks/'.$taskId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $taskId
     *
     * @return mixed|object
     */
    public function destroy($taskId)
    {
        $response = $this->delete('categories/tasks/'.$taskId);

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

        $response = $this->get('categories/tasks');

        return $this->hydrateOne($response);
    }
}
