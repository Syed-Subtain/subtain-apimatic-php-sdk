<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePointErrorItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointErrorItem
 *
 * @see ComponentPricePointErrorItem
 */
class ComponentPricePointErrorItemBuilder
{
    /**
     * @var ComponentPricePointErrorItem
     */
    private $instance;

    private function __construct(ComponentPricePointErrorItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component price point error item Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPricePointErrorItem());
    }

    /**
     * Sets component id field.
     */
    public function componentId(?float $value): self
    {
        $this->instance->setComponentId($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets price point field.
     */
    public function pricePoint(?float $value): self
    {
        $this->instance->setPricePoint($value);
        return $this;
    }

    /**
     * Initializes a new component price point error item object.
     */
    public function build(): ComponentPricePointErrorItem
    {
        return CoreHelper::clone($this->instance);
    }
}
