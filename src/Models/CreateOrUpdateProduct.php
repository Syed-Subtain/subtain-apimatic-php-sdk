<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateOrUpdateProduct implements \JsonSerializable
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
     * @var string
     */
    private $description;

    /**
     * @var string|null
     */
    private $accountingCode;

    /**
     * @var bool|null
     */
    private $requireCreditCard;

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
     * @var bool|null
     */
    private $autoCreateSignupPage;

    /**
     * @var string|null
     */
    private $taxCode;

    /**
     * @param string $name
     * @param string $description
     * @param int $priceInCents
     * @param int $interval
     * @param string $intervalUnit
     */
    public function __construct(
        string $name,
        string $description,
        int $priceInCents,
        int $interval,
        string $intervalUnit
    ) {
        $this->name = $name;
        $this->description = $description;
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
     * Returns Description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Accounting Code.
     */
    public function getAccountingCode(): ?string
    {
        return $this->accountingCode;
    }

    /**
     * Sets Accounting Code.
     *
     * @maps accounting_code
     */
    public function setAccountingCode(?string $accountingCode): void
    {
        $this->accountingCode = $accountingCode;
    }

    /**
     * Returns Require Credit Card.
     */
    public function getRequireCreditCard(): ?bool
    {
        return $this->requireCreditCard;
    }

    /**
     * Sets Require Credit Card.
     *
     * @maps require_credit_card
     */
    public function setRequireCreditCard(?bool $requireCreditCard): void
    {
        $this->requireCreditCard = $requireCreditCard;
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
     * Returns Auto Create Signup Page.
     */
    public function getAutoCreateSignupPage(): ?bool
    {
        return $this->autoCreateSignupPage;
    }

    /**
     * Sets Auto Create Signup Page.
     *
     * @maps auto_create_signup_page
     */
    public function setAutoCreateSignupPage(?bool $autoCreateSignupPage): void
    {
        $this->autoCreateSignupPage = $autoCreateSignupPage;
    }

    /**
     * Returns Tax Code.
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Sets Tax Code.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode = $taxCode;
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
        $json['name']                        = $this->name;
        if (isset($this->handle)) {
            $json['handle']                  = $this->handle;
        }
        $json['description']                 = $this->description;
        if (isset($this->accountingCode)) {
            $json['accounting_code']         = $this->accountingCode;
        }
        if (isset($this->requireCreditCard)) {
            $json['require_credit_card']     = $this->requireCreditCard;
        }
        $json['price_in_cents']              = $this->priceInCents;
        $json['interval']                    = $this->interval;
        $json['interval_unit']               = $this->intervalUnit;
        if (isset($this->autoCreateSignupPage)) {
            $json['auto_create_signup_page'] = $this->autoCreateSignupPage;
        }
        if (isset($this->taxCode)) {
            $json['tax_code']                = $this->taxCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
