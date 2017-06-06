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
 * Class RecurringInvoices.
 */
class RecurringInvoices extends AbstractApi
{
    /**
     * @param array $recurring_invoice
     *
     * @return mixed|object
     */
    public function create(array $recurring_invoice)
    {
        $this->setFormParameters(compact('recurring_invoice'));

        $response = $this->post('rinv/'.$invoiceHashKey.'/payments');

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     *
     * @return mixed|object
     */
    public function retrieve($invoiceHashKey)
    {
        $response = $this->get('rinv/'.$invoiceHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param array $recurring_invoice
     *
     * @return mixed|object
     */
    public function update($invoiceHashKey, array $recurring_invoice)
    {
        $this->setFormParameters(compact('recurring_invoice'));

        $response = $this->put('rinv/'.$invoiceHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     *
     * @return mixed|object
     */
    public function destroy($invoiceHashKey)
    {
        $response = $this->delete('rinv/'.$invoiceHashKey);

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

        $response = $this->get('rinv');

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     *
     * @return mixed|object
     */
    public function invoiceActivities($invoiceHashKey)
    {
        $response = $this->post('rinv/'.$invoiceHashKey.'/invoices');

        return $this->hydrateOne($response);
    }
}
