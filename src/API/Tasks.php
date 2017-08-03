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

/**
 * Class Tasks.
 */
class Tasks extends AbstractAPI
{
    /**
     * @param array $task_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $task_category): HttpResponse
    {
        return $this->client->post('categories/tasks', compact('task_category'));
    }

    /**
     * @param $taskId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(int $taskId): HttpResponse
    {
        return $this->client->get("categories/tasks/{$taskId}");
    }

    /**
     * @param $taskId
     * @param array $task_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update($taskId, array $task_category): HttpResponse
    {
        return $this->client->put("categories/tasks/{$taskId}", compact('task_category'));
    }

    /**
     * @param $taskId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy($taskId): HttpResponse
    {
        return $this->client->delete("categories/tasks/{$taskId}");
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
        return $this->client->get('categories/tasks', compact('page', 'per_page', 'order'));
    }
}
