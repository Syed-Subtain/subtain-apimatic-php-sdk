<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOffer;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOffer
 *
 * @see CreateOffer
 */
class CreateOfferBuilder
{
    /**
     * @var CreateOffer
     */
    private $instance;

    private function __construct(CreateOffer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create offer Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOffer());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Sets coupons field.
     */
    public function coupons(?array $value): self
    {
        $this->instance->setCoupons($value);
        return $this;
    }

    /**
     * Initializes a new create offer object.
     */
    public function build(): CreateOffer
    {
        return CoreHelper::clone($this->instance);
    }
}
