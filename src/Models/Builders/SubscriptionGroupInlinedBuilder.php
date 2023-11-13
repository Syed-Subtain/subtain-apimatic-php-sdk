<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupInlined;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupInlined
 *
 * @see SubscriptionGroupInlined
 */
class SubscriptionGroupInlinedBuilder
{
    /**
     * @var SubscriptionGroupInlined
     */
    private $instance;

    private function __construct(SubscriptionGroupInlined $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group inlined Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupInlined());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets scheme field.
     */
    public function scheme(?string $value): self
    {
        $this->instance->setScheme($value);
        return $this;
    }

    /**
     * Sets primary subscription id field.
     */
    public function primarySubscriptionId(?string $value): self
    {
        $this->instance->setPrimarySubscriptionId($value);
        return $this;
    }

    /**
     * Sets primary field.
     */
    public function primary(?bool $value): self
    {
        $this->instance->setPrimary($value);
        return $this;
    }

    /**
     * Initializes a new subscription group inlined object.
     */
    public function build(): SubscriptionGroupInlined
    {
        return CoreHelper::clone($this->instance);
    }
}
