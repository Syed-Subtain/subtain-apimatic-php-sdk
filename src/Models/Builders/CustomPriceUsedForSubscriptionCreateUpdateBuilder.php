<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomPriceUsedForSubscriptionCreateUpdate;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomPriceUsedForSubscriptionCreateUpdate
 *
 * @see CustomPriceUsedForSubscriptionCreateUpdate
 */
class CustomPriceUsedForSubscriptionCreateUpdateBuilder
{
    /**
     * @var CustomPriceUsedForSubscriptionCreateUpdate
     */
    private $instance;

    private function __construct(CustomPriceUsedForSubscriptionCreateUpdate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new custom price used for subscription create update Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomPriceUsedForSubscriptionCreateUpdate());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets price in cents field.
     */
    public function priceInCents($value): self
    {
        $this->instance->setPriceInCents($value);
        return $this;
    }

    /**
     * Sets interval field.
     */
    public function interval($value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Sets trial price in cents field.
     */
    public function trialPriceInCents($value): self
    {
        $this->instance->setTrialPriceInCents($value);
        return $this;
    }

    /**
     * Sets trial interval field.
     */
    public function trialInterval($value): self
    {
        $this->instance->setTrialInterval($value);
        return $this;
    }

    /**
     * Sets trial interval unit field.
     */
    public function trialIntervalUnit(?string $value): self
    {
        $this->instance->setTrialIntervalUnit($value);
        return $this;
    }

    /**
     * Sets initial charge in cents field.
     */
    public function initialChargeInCents($value): self
    {
        $this->instance->setInitialChargeInCents($value);
        return $this;
    }

    /**
     * Sets initial charge after trial field.
     */
    public function initialChargeAfterTrial(?bool $value): self
    {
        $this->instance->setInitialChargeAfterTrial($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     */
    public function expirationInterval($value): self
    {
        $this->instance->setExpirationInterval($value);
        return $this;
    }

    /**
     * Sets expiration interval unit field.
     */
    public function expirationIntervalUnit(?string $value): self
    {
        $this->instance->setExpirationIntervalUnit($value);
        return $this;
    }

    /**
     * Sets tax included field.
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
        return $this;
    }

    /**
     * Initializes a new custom price used for subscription create update object.
     */
    public function build(): CustomPriceUsedForSubscriptionCreateUpdate
    {
        return CoreHelper::clone($this->instance);
    }
}
