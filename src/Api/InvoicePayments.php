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
 * Class InvoicePayments.
 */
class InvoicePayments extends AbstractApi
{
    /**
     * @param array $payment
     *
     * @return mixed|object
     */
    public function create(array $payment)
    {
        $this->setFormParameters(compact('payment'));

        $response = $this->post('invs/'.$invoiceHashKey.'/payments');

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param $paymentId
     *
     * @return mixed|object
     */
    public function retrieve($invoiceHashKey, $paymentId)
    {
        $response = $this->get('invs/'.$invoiceHashKey.'/payments/'.$paymentId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param $paymentId
     * @param array $payment
     *
     * @return mixed|object
     */
    public function update($invoiceHashKey, $paymentId, array $payment)
    {
        $this->setFormParameters(compact('payment'));

        $response = $this->put('invs/'.$invoiceHashKey.'/payments/'.$paymentId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param $paymentId
     *
     * @return mixed|object
     */
    public function destroy($invoiceHashKey, $paymentId)
    {
        $response = $this->delete('invs/'.$invoiceHashKey.'/payments/'.$paymentId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param int    $page
     * @param int    $per_page
     * @param string $order
     *
     * @return mixed|object
     */
    public function all($invoiceHashKey, $page = 1, $per_page = 20, $order = 'asc')
    {
        $this->setQuery(compact('page', 'per_page', 'order'));

        $response = $this->get('invs/'.$invoiceHashKey.'/payments');

        return $this->hydrateOne($response);
    }

    /**
     * @param $invoiceHashKey
     * @param $paymentId
     *
     * @return mixed|object
     */
    public function markAsRealized($invoiceHashKey, $paymentId)
    {
        $response = $this->post('invs/'.$invoiceHashKey.'/payments/'.$paymentId.'/mark_as_realized');

        return $this->hydrateOne($response);
    }
}
