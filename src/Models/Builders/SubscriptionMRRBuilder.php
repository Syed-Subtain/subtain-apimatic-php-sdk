<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMRR;
use AdvancedBillingLib\Models\SubscriptionMRRBreakout;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMRR
 *
 * @see SubscriptionMRR
 */
class SubscriptionMRRBuilder
{
    /**
     * @var SubscriptionMRR
     */
    private $instance;

    private function __construct(SubscriptionMRR $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription mrr Builder object.
     */
    public static function init(float $subscriptionId, float $mrrAmountInCents): self
    {
        return new self(new SubscriptionMRR($subscriptionId, $mrrAmountInCents));
    }

    /**
     * Sets breakouts field.
     */
    public function breakouts(?SubscriptionMRRBreakout $value): self
    {
        $this->instance->setBreakouts($value);
        return $this;
    }

    /**
     * Initializes a new subscription mrr object.
     */
    public function build(): SubscriptionMRR
    {
        return CoreHelper::clone($this->instance);
    }
}
