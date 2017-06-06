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
 * Class Invoices.
 */
class Invoices extends AbstractApi
{
    /**
     * @param array $invoice
     *
     * @return mixed|object
     */
    public function create(array $invoice)
    {
        $this->setFormParameters(compact('invoice'));

        $response = $this->post('invs/'.$invoiceHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     *
     * @return mixed|object
     */
    public function retrieve($invoiceHashKey)
    {
        $response = $this->get('invs/'.$invoiceHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param array $invoice
     *
     * @return mixed|object
     */
    public function update($invoiceHashKey, array $invoice)
    {
        $this->setFormParameters(compact('invoice'));

        $response = $this->put('invs/'.$invoiceHashKey);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     *
     * @return mixed|object
     */
    public function destroy($invoiceHashKey)
    {
        $response = $this->delete('invs/'.$invoiceHashKey);

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

        $response = $this->get('invs');

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param array $delivery
     *
     * @return mixed|object
     */
    public function sendInvoice($invoiceHashKey, array $delivery)
    {
        $this->setFormParameters(compact('delivery'));

        $response = $this->post('invs/'.$invoiceHashKey.'/deliver');

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param array $delivery
     *
     * @return mixed|object
     */
    public function sendInvoiceReminder($invoiceHashKey, array $delivery)
    {
        $this->setFormParameters(compact('delivery'));

        $response = $this->post('invs/'.$invoiceHashKey.'/reminder');

        return $this->hydrateOne($response);
    }
}
