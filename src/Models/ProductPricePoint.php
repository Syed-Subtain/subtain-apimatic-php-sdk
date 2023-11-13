<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProductPricePoint implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var int|null
     */
    private $priceInCents;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
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
     * @var bool|null
     */
    private $introductoryOffer;

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
     * @var int|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $archivedAt;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var array
     */
    private $subscriptionId = [];

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
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
    public function getPriceInCents(): ?int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     *
     * @maps price_in_cents
     */
    public function setPriceInCents(?int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     *
     * @maps interval_unit
     */
    public function setIntervalUnit(?string $intervalUnit): void
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
     * Returns Introductory Offer.
     * reserved for future use
     */
    public function getIntroductoryOffer(): ?bool
    {
        return $this->introductoryOffer;
    }

    /**
     * Sets Introductory Offer.
     * reserved for future use
     *
     * @maps introductory_offer
     */
    public function setIntroductoryOffer(?bool $introductoryOffer): void
    {
        $this->introductoryOffer = $introductoryOffer;
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
     * Returns Product Id.
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Archived At.
     */
    public function getArchivedAt(): ?string
    {
        return $this->archivedAt;
    }

    /**
     * Sets Archived At.
     *
     * @maps archived_at
     */
    public function setArchivedAt(?string $archivedAt): void
    {
        $this->archivedAt = $archivedAt;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
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
     * Returns Type.
     * Price point type. We expose the following types:
     * 1. **default**: a price point that is marked as a default price for a certain product.
     * 2. **custom**: a custom price point.
     * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
     * **not** a custom one.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Price point type. We expose the following types:
     * 1. **default**: a price point that is marked as a default price for a certain product.
     * 2. **custom**: a custom price point.
     * 3. **catalog**: a price point that is **not** marked as a default price for a certain product and is
     * **not** a custom one.
     *
     * @maps type
     * @factory \AdvancedBillingLib\Models\PricePointType::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Tax Included.
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        if (count($this->subscriptionId) == 0) {
            return null;
        }
        return $this->subscriptionId['value'];
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId['value'] = $subscriptionId;
    }

    /**
     * Unsets Subscription Id.
     */
    public function unsetSubscriptionId(): void
    {
        $this->subscriptionId = [];
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
        if (isset($this->id)) {
            $json['id']                         = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                       = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents']             = $this->priceInCents;
        }
        if (isset($this->interval)) {
            $json['interval']                   = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']              = $this->intervalUnit;
        }
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
        if (isset($this->introductoryOffer)) {
            $json['introductory_offer']         = $this->introductoryOffer;
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
        if (isset($this->productId)) {
            $json['product_id']                 = $this->productId;
        }
        if (isset($this->archivedAt)) {
            $json['archived_at']                = $this->archivedAt;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                 = $this->updatedAt;
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']     = $this->useSiteExchangeRate;
        }
        if (isset($this->type)) {
            $json['type']                       = PricePointType::checkValue($this->type);
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']               = $this->taxIncluded;
        }
        if (!empty($this->subscriptionId)) {
            $json['subscription_id']            = $this->subscriptionId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
