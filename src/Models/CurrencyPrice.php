<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CurrencyPrice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var float|null
     */
    private $price;

    /**
     * @var string|null
     */
    private $formattedPrice;

    /**
     * @var int|null
     */
    private $priceId;

    /**
     * @var int|null
     */
    private $pricePointId;

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
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Price.
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     *
     * @maps price
     */
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    /**
     * Returns Formatted Price.
     */
    public function getFormattedPrice(): ?string
    {
        return $this->formattedPrice;
    }

    /**
     * Sets Formatted Price.
     *
     * @maps formatted_price
     */
    public function setFormattedPrice(?string $formattedPrice): void
    {
        $this->formattedPrice = $formattedPrice;
    }

    /**
     * Returns Price Id.
     */
    public function getPriceId(): ?int
    {
        return $this->priceId;
    }

    /**
     * Sets Price Id.
     *
     * @maps price_id
     */
    public function setPriceId(?int $priceId): void
    {
        $this->priceId = $priceId;
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
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
            $json['id']              = $this->id;
        }
        if (isset($this->currency)) {
            $json['currency']        = $this->currency;
        }
        if (isset($this->price)) {
            $json['price']           = $this->price;
        }
        if (isset($this->formattedPrice)) {
            $json['formatted_price'] = $this->formattedPrice;
        }
        if (isset($this->priceId)) {
            $json['price_id']        = $this->priceId;
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']  = $this->pricePointId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
