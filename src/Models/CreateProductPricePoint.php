<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateProductPricePoint implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var int
     */
    private $priceInCents;

    /**
     * @var int
     */
    private $interval;

    /**
     * @var string
     */
    private $intervalUnit;

    /**
     * @var int|null
     */
    private $trialPriceInCents;

    /**
     * @var int|null
     */
    private $trialInterval;

    /**
     * @var string|null
     */
    private $trialIntervalUnit;

    /**
     * @var string|null
     */
    private $trialType;

    /**
     * @var int|null
     */
    private $initialChargeInCents;

    /**
     * @var bool|null
     */
    private $initialChargeAfterTrial;

    /**
     * @var int|null
     */
    private $expirationInterval;

    /**
     * @var string|null
     */
    private $expirationIntervalUnit;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate = true;

    /**
     * @param string $name
     * @param int $priceInCents
     * @param int $interval
     * @param string $intervalUnit
     */
    public function __construct(string $name, int $priceInCents, int $interval, string $intervalUnit)
    {
        $this->name = $name;
        $this->priceInCents = $priceInCents;
        $this->interval = $interval;
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Price in Cents.
     */
    public function getPriceInCents(): int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     *
     * @required
     * @maps price_in_cents
     */
    public function setPriceInCents(int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     *
     * @required
     * @maps interval
     */
    public function setInterval(int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     */
    public function getIntervalUnit(): string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     *
     * @required
     * @maps interval_unit
     */
    public function setIntervalUnit(string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Trial Price in Cents.
     */
    public function getTrialPriceInCents(): ?int
    {
        return $this->trialPriceInCents;
    }

    /**
     * Sets Trial Price in Cents.
     *
     * @maps trial_price_in_cents
     */
    public function setTrialPriceInCents(?int $trialPriceInCents): void
    {
        $this->trialPriceInCents = $trialPriceInCents;
    }

    /**
     * Returns Trial Interval.
     */
    public function getTrialInterval(): ?int
    {
        return $this->trialInterval;
    }

    /**
     * Sets Trial Interval.
     *
     * @maps trial_interval
     */
    public function setTrialInterval(?int $trialInterval): void
    {
        $this->trialInterval = $trialInterval;
    }

    /**
     * Returns Trial Interval Unit.
     */
    public function getTrialIntervalUnit(): ?string
    {
        return $this->trialIntervalUnit;
    }

    /**
     * Sets Trial Interval Unit.
     *
     * @maps trial_interval_unit
     */
    public function setTrialIntervalUnit(?string $trialIntervalUnit): void
    {
        $this->trialIntervalUnit = $trialIntervalUnit;
    }

    /**
     * Returns Trial Type.
     */
    public function getTrialType(): ?string
    {
        return $this->trialType;
    }

    /**
     * Sets Trial Type.
     *
     * @maps trial_type
     */
    public function setTrialType(?string $trialType): void
    {
        $this->trialType = $trialType;
    }

    /**
     * Returns Initial Charge in Cents.
     */
    public function getInitialChargeInCents(): ?int
    {
        return $this->initialChargeInCents;
    }

    /**
     * Sets Initial Charge in Cents.
     *
     * @maps initial_charge_in_cents
     */
    public function setInitialChargeInCents(?int $initialChargeInCents): void
    {
        $this->initialChargeInCents = $initialChargeInCents;
    }

    /**
     * Returns Initial Charge After Trial.
     */
    public function getInitialChargeAfterTrial(): ?bool
    {
        return $this->initialChargeAfterTrial;
    }

    /**
     * Sets Initial Charge After Trial.
     *
     * @maps initial_charge_after_trial
     */
    public function setInitialChargeAfterTrial(?bool $initialChargeAfterTrial): void
    {
        $this->initialChargeAfterTrial = $initialChargeAfterTrial;
    }

    /**
     * Returns Expiration Interval.
     */
    public function getExpirationInterval(): ?int
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     */
    public function getExpirationIntervalUnit(): ?string
    {
        return $this->expirationIntervalUnit;
    }

    /**
     * Sets Expiration Interval Unit.
     *
     * @maps expiration_interval_unit
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit = $expirationIntervalUnit;
    }

    /**
     * Returns Use Site Exchange Rate.
     * Whether or not to use the site's exchange rate or define your own pricing when your site has
     * multiple currencies defined.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * Whether or not to use the site's exchange rate or define your own pricing when your site has
     * multiple currencies defined.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
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
        $json['name']                           = $this->name;
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        $json['price_in_cents']                 = $this->priceInCents;
        $json['interval']                       = $this->interval;
        $json['interval_unit']                  = $this->intervalUnit;
        if (isset($this->trialPriceInCents)) {
            $json['trial_price_in_cents']       = $this->trialPriceInCents;
        }
        if (isset($this->trialInterval)) {
            $json['trial_interval']             = $this->trialInterval;
        }
        if (isset($this->trialIntervalUnit)) {
            $json['trial_interval_unit']        = $this->trialIntervalUnit;
        }
        if (isset($this->trialType)) {
            $json['trial_type']                 = $this->trialType;
        }
        if (isset($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']    = $this->initialChargeInCents;
        }
        if (isset($this->initialChargeAfterTrial)) {
            $json['initial_charge_after_trial'] = $this->initialChargeAfterTrial;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']        = $this->expirationInterval;
        }
        if (isset($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   = $this->expirationIntervalUnit;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']     = $this->useSiteExchangeRate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
