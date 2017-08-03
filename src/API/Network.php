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

use BrianFaust\Http\HttpResponse;

class Network extends AbstractAPI
{
    /**
     * @param array $network
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $network): HttpResponse
    {
        return $this->client->post('network', compact('network'));
    }

    /**
     * @param $networkHashKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(string $networkHashKey): HttpResponse
    {
        return $this->client->get("network/{$networkHashKey}");
    }

    /**
     * @param $networkHashKey
     * @param array $network
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(string $networkHashKey, array $network): HttpResponse
    {
        return $this->client->put("network/{$networkHashKey}", compact('network'));
    }

    /**
     * @param $networkHashKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy(string $networkHashKey): HttpResponse
    {
        return $this->client->delete("network/{$networkHashKey}");
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
        return $this->client->get('network', compact('page', 'per_page', 'order'));
    }

    /**
     * @param $networkHashKey
     * @param int $page
     * @param int $per_page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function invoiceActivities(string $networkHashKey, int $page = 1, int $per_page = 20): HttpResponse
    {
        return $this->client->get("network/{$networkHashKey}/invoices", compact('per_page', 'page'));
    }

    /**
     * @param $networkHashKey
     * @param int $page
     * @param int $per_page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function estimateActivities(string $networkHashKey, int $page = 1, int $per_page = 20): HttpResponse
    {
        return $this->client->get("network/{$networkHashKey}/estimates", compact('per_page', 'page'));
    }

    /**
     * @param $networkHashKey
     * @param int $page
     * @param int $per_page
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function recurringInvoicesActivities(string $networkHashKey, int $page = 1, int $per_page = 20): HttpResponse
    {
        return $this->client->get("network/{$networkHashKey}/recurring_invoices", compact('per_page', 'page'));
    }
}
