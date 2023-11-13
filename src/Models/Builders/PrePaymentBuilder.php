<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrePayment;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrePayment
 *
 * @see PrePayment
 */
class PrePaymentBuilder
{
    /**
     * @var PrePayment
     */
    private $instance;

    private function __construct(PrePayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pre payment Builder object.
     */
    public static function init(): self
    {
        return new self(new PrePayment());
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?string $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?string $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     */
    public function endingBalanceInCents(?string $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
        return $this;
    }

    /**
     * Initializes a new pre payment object.
     */
    public function build(): PrePayment
    {
        return CoreHelper::clone($this->instance);
    }
}
