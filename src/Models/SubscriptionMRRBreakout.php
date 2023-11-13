<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionMRRBreakout implements \JsonSerializable
{
    /**
     * @var float
     */
    private $planAmountInCents;

    /**
     * @var float
     */
    private $usageAmountInCents;

    /**
     * @param float $planAmountInCents
     * @param float $usageAmountInCents
     */
    public function __construct(float $planAmountInCents, float $usageAmountInCents)
    {
        $this->planAmountInCents = $planAmountInCents;
        $this->usageAmountInCents = $usageAmountInCents;
    }

    /**
     * Returns Plan Amount in Cents.
     */
    public function getPlanAmountInCents(): float
    {
        return $this->planAmountInCents;
    }

    /**
     * Sets Plan Amount in Cents.
     *
     * @required
     * @maps plan_amount_in_cents
     */
    public function setPlanAmountInCents(float $planAmountInCents): void
    {
        $this->planAmountInCents = $planAmountInCents;
    }

    /**
     * Returns Usage Amount in Cents.
     */
    public function getUsageAmountInCents(): float
    {
        return $this->usageAmountInCents;
    }

    /**
     * Sets Usage Amount in Cents.
     *
     * @required
     * @maps usage_amount_in_cents
     */
    public function setUsageAmountInCents(float $usageAmountInCents): void
    {
        $this->usageAmountInCents = $usageAmountInCents;
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
        $json['plan_amount_in_cents']  = $this->planAmountInCents;
        $json['usage_amount_in_cents'] = $this->usageAmountInCents;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
