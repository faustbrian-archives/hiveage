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
 * Class Expenses.
 */
class Expenses extends AbstractApi
{
    /**
     * @param array $expense_category
     *
     * @return mixed|object
     */
    public function create(array $expense_category)
    {
        $this->setFormParameters(compact('expense_category'));

        $response = $this->post('categories/expenses');

        return $this->hydrateOne($response);
    }

    /**
     * @param $expenseId
     *
     * @return mixed|object
     */
    public function retrieve($expenseId)
    {
        $response = $this->get('categories/expenses/'.$expenseId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $expenseId
     * @param array $expense_category
     *
     * @return mixed|object
     */
    public function update($expenseId, array $expense_category)
    {
        $this->setFormParameters(compact('expense_category'));

        $response = $this->put('categories/expenses/'.$expenseId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $expenseId
     *
     * @return mixed|object
     */
    public function destroy($expenseId)
    {
        $response = $this->delete('categories/expenses/'.$expenseId);

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

        $response = $this->get('categories/expenses');

        return $this->hydrateOne($response);
    }
}
