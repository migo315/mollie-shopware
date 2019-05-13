<?php

// Mollie Shopware Plugin Version: 1.4.4.1

namespace Mollie\Api\Resources;

class ChargebackCollection extends \Mollie\Api\Resources\CursorCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName()
    {
        return "chargebacks";
    }
    /**
     * @return BaseResource
     */
    protected function createResourceObject()
    {
        return new \Mollie\Api\Resources\Chargeback($this->client);
    }
}
