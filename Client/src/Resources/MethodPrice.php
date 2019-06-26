<?php

// Mollie Shopware Plugin Version: 1.4.8

namespace Mollie\Api\Resources;

class MethodPrice extends \Mollie\Api\Resources\BaseResource
{
    /**
     * The area or product-type where the pricing is applied for, translated in the optional locale passed.
     *
     * @example "The Netherlands"
     * @var object
     */
    public $description;
    /**
     * The fixed price per transaction. This excludes the variable amount.
     *
     * @var object An amount object consisting of `value` and `currency`
     */
    public $fixed;
    /**
     * A string containing the percentage being charged over the payment amount besides the fixed price.
     *
     * @var object An amount object consisting of `value` and `currency`
     */
    public $variable;
}
