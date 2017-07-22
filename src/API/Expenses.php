<?php

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
 * Class Expenses.
 */
class Expenses extends AbstractAPI
{
    /**
     * @param array $expense_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $expense_category): HttpResponse
    {
        return $this->client->post('categories/expenses', compact('expense_category'));
    }

    /**
     * @param $expenseId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(int $expenseId): HttpResponse
    {
        return $this->client->get("categories/expenses/{$expenseId}");
    }

    /**
     * @param $expenseId
     * @param array $expense_category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(int $expenseId, array $expense_category): HttpResponse
    {
        return $this->client->put("categories/expenses/{$expenseId}", compact('expense_category'));
    }

    /**
     * @param $expenseId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy(int $expenseId): HttpResponse
    {
        return $this->client->delete("categories/expenses/{$expenseId}");
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
        return $this->client->get('categories/expenses', compact('page', 'per_page', 'order'));
    }
}
