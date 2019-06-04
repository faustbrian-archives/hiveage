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

class RecurringInvoices extends AbstractAPI
{
    /**
     * @param array $recurring_invoice
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $recurring_invoice): HttpResponse
    {
        return $this->client->post("rinv/{$invoiceHashKey}/payments", compact('recurring_invoice'));
    }

    /**
     * @param $invoiceHashKey
     *
     * @return \Plients\Http\HttpResponse
     */
    public function retrieve(int $invoiceHashKey): HttpResponse
    {
        return $this->client->get("rinv/{$invoiceHashKey}");
    }

    /**
     * @param $invoiceHashKey
     * @param array $recurring_invoice
     *
     * @return \Plients\Http\HttpResponse
     */
    public function update(string $invoiceHashKey, array $recurring_invoice): HttpResponse
    {
        return $this->client->put("rinv/{$invoiceHashKey}", compact('recurring_invoice'));
    }

    /**
     * @param $invoiceHashKey
     *
     * @return \Plients\Http\HttpResponse
     */
    public function destroy(string $invoiceHashKey): HttpResponse
    {
        return $this->client->delete("rinv/{$invoiceHashKey}");
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
        return $this->client->get('rinv', compact('page', 'per_page', 'order'));
    }

    /**
     * @param $invoiceHashKey
     *
     * @return \Plients\Http\HttpResponse
     */
    public function invoiceActivities(string $invoiceHashKey): HttpResponse
    {
        return $this->client->post("rinv/{$invoiceHashKey}/invoices");
    }
}
