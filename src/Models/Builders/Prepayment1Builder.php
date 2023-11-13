<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Prepayment1;
use Core\Utils\CoreHelper;

/**
 * Builder for model Prepayment1
 *
 * @see Prepayment1
 */
class Prepayment1Builder
{
    /**
     * @var Prepayment1
     */
    private $instance;

    private function __construct(Prepayment1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepayment 1 Builder object.
     */
    public static function init(
        float $id,
        float $subscriptionId,
        float $amountInCents,
        float $remainingAmountInCents,
        bool $external,
        string $memo,
        string $createdAt
    ): self {
        return new self(new Prepayment1(
            $id,
            $subscriptionId,
            $amountInCents,
            $remainingAmountInCents,
            $external,
            $memo,
            $createdAt
        ));
    }

    /**
     * Sets refunded amount in cents field.
     */
    public function refundedAmountInCents(?float $value): self
    {
        $this->instance->setRefundedAmountInCents($value);
        return $this;
    }

    /**
     * Sets details field.
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Sets payment type field.
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Initializes a new prepayment 1 object.
     */
    public function build(): Prepayment1
    {
        return CoreHelper::clone($this->instance);
    }
}
