<?php

// Mollie Shopware Plugin Version: 1.4.4.1

namespace Mollie\Api\Resources;

class MethodCollection extends \Mollie\Api\Resources\BaseCollection
{
    /**
     * @return string
     */
    public function getCollectionResourceName()
    {
        return "methods";
    }
}
