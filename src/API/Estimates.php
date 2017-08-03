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
 * Class Estimates.
 */
class Estimates extends AbstractAPI
{
    /**
     * @param array $estimate
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $estimate): HttpResponse
    {
        return $this->client->post("estm/{$estimateHashKey}", compact('estimate'));
    }

    /**
     * @param $estimateHashKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(string $estimateHashKey): HttpResponse
    {
        return $this->client->get("estm/{$estimateHashKey}");
    }

    /**
     * @param $estimateHashKey
     * @param array $estimate
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(string $estimateHashKey, array $estimate): HttpResponse
    {
        return $this->client->put("estm/{$estimateHashKey}", compact('estimate'));
    }

    /**
     * @param $estimateHashKey
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy(string $estimateHashKey): HttpResponse
    {
        return $this->client->delete("estm/{$estimateHashKey}");
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
        return $this->client->get('estm', compact('page', 'per_page', 'order'));
    }

    /**
     * @param $estimateHashKey
     * @param array $estimate
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function sendInvoice(string $estimateHashKey, array $estimate): HttpResponse
    {
        return $this->client->post("estm/{$estimateHashKey}/deliver", compact('estimate'));
    }
}
