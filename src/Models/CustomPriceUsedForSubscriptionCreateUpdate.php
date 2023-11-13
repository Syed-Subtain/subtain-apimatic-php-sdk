<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the
 * subscription
 */
class CustomPriceUsedForSubscriptionCreateUpdate implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|int|null
     */
    private $priceInCents;

    /**
     * @var string|int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var string|int|null
     */
    private $trialPriceInCents;

    /**
     * @var string|int|null
     */
    private $trialInterval;

    /**
     * @var string|null
     */
    private $trialIntervalUnit;

    /**
     * @var string|int|null
     */
    private $initialChargeInCents;

    /**
     * @var bool|null
     */
    private $initialChargeAfterTrial;

    /**
     * @var string|int|null
     */
    private $expirationInterval;

    /**
     * @var string|null
     */
    private $expirationIntervalUnit;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * Returns Name.
     * (Optional)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * (Optional)
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     * (Optional)
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * (Optional)
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Price in Cents.
     * Required if using `custom_price` attribute.
     *
     * @return string|int|null
     */
    public function getPriceInCents()
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * Required if using `custom_price` attribute.
     *
     * @maps price_in_cents
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $priceInCents
     */
    public function setPriceInCents($priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     * Required if using `custom_price` attribute.
     *
     * @return string|int|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * Required if using `custom_price` attribute.
     *
     * @maps interval
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $interval
     */
    public function setInterval($interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * Required if using `custom_price` attribute.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * Required if using `custom_price` attribute.
     *
     * @maps interval_unit
     * @mapsBy anyOf(oneOf(IntervalUnit),null)
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Trial Price in Cents.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getTrialPriceInCents()
    {
        return $this->trialPriceInCents;
    }

    /**
     * Sets Trial Price in Cents.
     * (Optional)
     *
     * @maps trial_price_in_cents
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $trialPriceInCents
     */
    public function setTrialPriceInCents($trialPriceInCents): void
    {
        $this->trialPriceInCents = $trialPriceInCents;
    }

    /**
     * Returns Trial Interval.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getTrialInterval()
    {
        return $this->trialInterval;
    }

    /**
     * Sets Trial Interval.
     * (Optional)
     *
     * @maps trial_interval
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $trialInterval
     */
    public function setTrialInterval($trialInterval): void
    {
        $this->trialInterval = $trialInterval;
    }

    /**
     * Returns Trial Interval Unit.
     * (Optional)
     */
    public function getTrialIntervalUnit(): ?string
    {
        return $this->trialIntervalUnit;
    }

    /**
     * Sets Trial Interval Unit.
     * (Optional)
     *
     * @maps trial_interval_unit
     * @mapsBy anyOf(oneOf(IntervalUnit),null)
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit
     */
    public function setTrialIntervalUnit(?string $trialIntervalUnit): void
    {
        $this->trialIntervalUnit = $trialIntervalUnit;
    }

    /**
     * Returns Initial Charge in Cents.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getInitialChargeInCents()
    {
        return $this->initialChargeInCents;
    }

    /**
     * Sets Initial Charge in Cents.
     * (Optional)
     *
     * @maps initial_charge_in_cents
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $initialChargeInCents
     */
    public function setInitialChargeInCents($initialChargeInCents): void
    {
        $this->initialChargeInCents = $initialChargeInCents;
    }

    /**
     * Returns Initial Charge After Trial.
     * (Optional)
     */
    public function getInitialChargeAfterTrial(): ?bool
    {
        return $this->initialChargeAfterTrial;
    }

    /**
     * Sets Initial Charge After Trial.
     * (Optional)
     *
     * @maps initial_charge_after_trial
     */
    public function setInitialChargeAfterTrial(?bool $initialChargeAfterTrial): void
    {
        $this->initialChargeAfterTrial = $initialChargeAfterTrial;
    }

    /**
     * Returns Expiration Interval.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getExpirationInterval()
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * (Optional)
     *
     * @maps expiration_interval
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $expirationInterval
     */
    public function setExpirationInterval($expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     * (Optional)
     */
    public function getExpirationIntervalUnit(): ?string
    {
        return $this->expirationIntervalUnit;
    }

    /**
     * Sets Expiration Interval Unit.
     * (Optional)
     *
     * @maps expiration_interval_unit
     * @mapsBy anyOf(oneOf(IntervalUnit),null)
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit = $expirationIntervalUnit;
    }

    /**
     * Returns Tax Included.
     * (Optional)
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * (Optional)
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
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
        if (isset($this->name)) {
            $json['name']                       = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->priceInCents,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->interval)) {
            $json['interval']                   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->interval,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']              =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->intervalUnit,
                    'anyOf(oneOf(IntervalUnit),null)',
                    [
                        '\AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit'
                    ]
                );
        }
        if (isset($this->trialPriceInCents)) {
            $json['trial_price_in_cents']       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->trialPriceInCents,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->trialInterval)) {
            $json['trial_interval']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->trialInterval,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->trialIntervalUnit)) {
            $json['trial_interval_unit']        =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->trialIntervalUnit,
                    'anyOf(oneOf(IntervalUnit),null)',
                    [
                        '\AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit'
                    ]
                );
        }
        if (isset($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->initialChargeInCents,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->initialChargeAfterTrial)) {
            $json['initial_charge_after_trial'] = $this->initialChargeAfterTrial;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']        =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationInterval,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationIntervalUnit,
                    'anyOf(oneOf(IntervalUnit),null)',
                    [
                        '\AdvancedBillingLib\Models\IntervalUnit::checkValue IntervalUnit'
                    ]
                );
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']               = $this->taxIncluded;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
