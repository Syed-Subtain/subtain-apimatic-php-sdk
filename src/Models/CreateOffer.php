<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateOffer implements \JsonSerializable
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
     * @var string|null
     */
    private $description;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var int|null
     */
    private $productPricePointId;

    /**
     * @var CreateOfferComponent[]|null
     */
    private $components;

    /**
     * @var string[]|null
     */
    private $coupons;

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
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
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
     * Returns Product Price Point Id.
     */
    public function getProductPricePointId(): ?int
    {
        return $this->productPricePointId;
    }

    /**
     * Sets Product Price Point Id.
     *
     * @maps product_price_point_id
     */
    public function setProductPricePointId(?int $productPricePointId): void
    {
        $this->productPricePointId = $productPricePointId;
    }

    /**
     * Returns Components.
     *
     * @return CreateOfferComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     *
     * @maps components
     *
     * @param CreateOfferComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Returns Coupons.
     *
     * @return string[]|null
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * Sets Coupons.
     *
     * @maps coupons
     *
     * @param string[]|null $coupons
     */
    public function setCoupons(?array $coupons): void
    {
        $this->coupons = $coupons;
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
            $json['name']                   = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                 = $this->handle;
        }
        if (isset($this->description)) {
            $json['description']            = $this->description;
        }
        if (isset($this->productId)) {
            $json['product_id']             = $this->productId;
        }
        if (isset($this->productPricePointId)) {
            $json['product_price_point_id'] = $this->productPricePointId;
        }
        if (isset($this->components)) {
            $json['components']             = $this->components;
        }
        if (isset($this->coupons)) {
            $json['coupons']                = $this->coupons;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
