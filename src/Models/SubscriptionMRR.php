<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionMRR implements \JsonSerializable
{
    /**
     * @var float
     */
    private $subscriptionId;

    /**
     * @var float
     */
    private $mrrAmountInCents;

    /**
     * @var SubscriptionMRRBreakout|null
     */
    private $breakouts;

    /**
     * @param float $subscriptionId
     * @param float $mrrAmountInCents
     */
    public function __construct(float $subscriptionId, float $mrrAmountInCents)
    {
        $this->subscriptionId = $subscriptionId;
        $this->mrrAmountInCents = $mrrAmountInCents;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): float
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @required
     * @maps subscription_id
     */
    public function setSubscriptionId(float $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Mrr Amount in Cents.
     */
    public function getMrrAmountInCents(): float
    {
        return $this->mrrAmountInCents;
    }

    /**
     * Sets Mrr Amount in Cents.
     *
     * @required
     * @maps mrr_amount_in_cents
     */
    public function setMrrAmountInCents(float $mrrAmountInCents): void
    {
        $this->mrrAmountInCents = $mrrAmountInCents;
    }

    /**
     * Returns Breakouts.
     */
    public function getBreakouts(): ?SubscriptionMRRBreakout
    {
        return $this->breakouts;
    }

    /**
     * Sets Breakouts.
     *
     * @maps breakouts
     */
    public function setBreakouts(?SubscriptionMRRBreakout $breakouts): void
    {
        $this->breakouts = $breakouts;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['subscription_id']     = $this->subscriptionId;
        $json['mrr_amount_in_cents'] = $this->mrrAmountInCents;
        if (isset($this->breakouts)) {
            $json['breakouts']       = $this->breakouts;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
