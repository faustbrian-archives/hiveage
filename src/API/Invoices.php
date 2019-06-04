<?php

declare(strict_types=1);

/*
 * This file is part of Hiveage PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Hiveage\API;

use Plients\Http\HttpResponse;

class Invoices extends AbstractAPI
{
    /**
     * @param array $invoice
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $invoice): HttpResponse
    {
        return $this->client->post("invs/{$invoiceHashKey}", compact('invoice'));
    }

    /**
     * @param $invoiceHashKey
     *
     * @return \Plients\Http\HttpResponse
     */
    public function retrieve(string $invoiceHashKey): HttpResponse
    {
        return $this->client->get("invs/{$invoiceHashKey}");
    }

    /**
     * @param $invoiceHashKey
     * @param array $invoice
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update($invoiceHashKey, array $invoice): HttpResponse
    {
        $this->setFormParameters(compact('invoice'));

        return $this->client->put("invs/{$invoiceHashKey}");
    }

    /**
     * @param $invoiceHashKey
     *
     * @return \Plients\Http\HttpResponse
     */
    public function destroy(string $invoiceHashKey): HttpResponse
    {
        return $this->client->delete("invs/{$invoiceHashKey}");
    }

    /**
     * @param int    $page
     * @param int    $per_page
     * @param string $order
     *
     * @return \Plients\Http\HttpResponse
     */
    public function all(int $page = 1, int $per_page = 20, string $order = 'asc'): HttpResponse
    {
        return $this->client->get('invs', compact('page', 'per_page', 'order'));
    }

    /**
     * @param $invoiceHashKey
     * @param array $delivery
     *
     * @return \Plients\Http\HttpResponse
     */
    public function sendInvoice(string $invoiceHashKey, array $delivery): HttpResponse
    {
        return $this->client->post("invs/{$invoiceHashKey}/deliver", compact('delivery'));
    }

    /**
     * @param $invoiceHashKey
     * @param array $delivery
     *
     * @return \Plients\Http\HttpResponse
     */
    public function sendInvoiceReminder(string $invoiceHashKey, array $delivery): HttpResponse
    {
        return $this->client->post("invs/{$invoiceHashKey}/reminder", compact('delivery'));
    }
}
