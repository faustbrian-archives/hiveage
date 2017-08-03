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

class Contacts extends AbstractAPI
{
    /**
     * @param array $contact
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function create(array $contact): HttpResponse
    {
        return $this->client->post("network/{$networkHashKey}/contacts", compact('contact'));
    }

    /**
     * @param $networkHashKey
     * @param $contactId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function retrieve(string $networkHashKey, int $contactId): HttpResponse
    {
        return $this->client->get("network/{$networkHashKey}/contacts/{$contactId}");
    }

    /**
     * @param $networkHashKey
     * @param $contactId
     * @param array $contact
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function update(string $networkHashKey, int $contactId, array $contact): HttpResponse
    {
        return $this->client->put("network/{$networkHashKey}/contacts/{$contactId}", compact('contact'));
    }

    /**
     * @param $networkHashKey
     * @param $contactId
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function destroy(string $networkHashKey, int $contactId): HttpResponse
    {
        return $this->client->delete("network/{$networkHashKey}/contacts/{$contactId}");
    }

    /**
     * @param $networkHashKey
     * @param int    $page
     * @param int    $per_page
     * @param string $order
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(string $networkHashKey, int $page = 1, int $per_page = 20, string $order = 'asc'): HttpResponse
    {
        return $this->client->get("network/{$networkHashKey}/contacts", compact('page', 'per_page', 'order'));
    }
}
