<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ComponentAllocationErrorItem implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var string|null
     */
    private $on;

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?float
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?float $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Kind.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     *
     * @maps kind
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns On.
     */
    public function getOn(): ?string
    {
        return $this->on;
    }

    /**
     * Sets On.
     *
     * @maps on
     */
    public function setOn(?string $on): void
    {
        $this->on = $on;
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
        if (isset($this->componentId)) {
            $json['component_id'] = $this->componentId;
        }
        if (isset($this->message)) {
            $json['message']      = $this->message;
        }
        if (isset($this->kind)) {
            $json['kind']         = $this->kind;
        }
        if (isset($this->on)) {
            $json['on']           = $this->on;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
