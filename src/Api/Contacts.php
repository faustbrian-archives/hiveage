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
 * Class Contacts.
 */
class Contacts extends AbstractApi
{
    /**
     * @param array $contact
     *
     * @return mixed|object
     */
    public function create(array $contact)
    {
        $this->setFormParameters(compact('contact'));

        $response = $this->post('network/'.$networkHashKey.'/contacts');

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param $contactId
     *
     * @return mixed|object
     */
    public function retrieve($networkHashKey, $contactId)
    {
        $response = $this->get('network/'.$networkHashKey.'/contacts/'.$contactId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param $contactId
     * @param array $contact
     *
     * @return mixed|object
     */
    public function update($networkHashKey, $contactId, array $contact)
    {
        $this->setFormParameters(compact('contact'));

        $response = $this->put('network/'.$networkHashKey.'/contacts/'.$contactId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param $contactId
     *
     * @return mixed|object
     */
    public function destroy($networkHashKey, $contactId)
    {
        $response = $this->delete('network/'.$networkHashKey.'/contacts/'.$contactId);

        return $this->hydrateOne($response);
    }

    /**
     * @param $networkHashKey
     * @param int    $page
     * @param int    $per_page
     * @param string $order
     *
     * @return mixed|object
     */
    public function all($networkHashKey, $page = 1, $per_page = 20, $order = 'asc')
    {
        $this->setQuery(compact('page', 'per_page', 'order'));

        $response = $this->get('network/'.$networkHashKey.'/contacts');

        return $this->hydrateOne($response);
    }
}
