<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupInlined implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $scheme;

    /**
     * @var string|null
     */
    private $primarySubscriptionId;

    /**
     * @var bool|null
     */
    private $primary;

    /**
     * Returns Uid.
     * The UID for the group
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * The UID for the group
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Scheme.
     * Whether the group is configured to rely on a primary subscription for billing. At this time, it will
     * always be 1.
     */
    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    /**
     * Sets Scheme.
     * Whether the group is configured to rely on a primary subscription for billing. At this time, it will
     * always be 1.
     *
     * @maps scheme
     */
    public function setScheme(?string $scheme): void
    {
        $this->scheme = $scheme;
    }

    /**
     * Returns Primary Subscription Id.
     * The subscription ID of the primary within the group. Applicable to scheme 1.
     */
    public function getPrimarySubscriptionId(): ?string
    {
        return $this->primarySubscriptionId;
    }

    /**
     * Sets Primary Subscription Id.
     * The subscription ID of the primary within the group. Applicable to scheme 1.
     *
     * @maps primary_subscription_id
     */
    public function setPrimarySubscriptionId(?string $primarySubscriptionId): void
    {
        $this->primarySubscriptionId = $primarySubscriptionId;
    }

    /**
     * Returns Primary.
     * A boolean indicating whether the subscription is the primary in the group. Applicable to scheme 1.
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    /**
     * Sets Primary.
     * A boolean indicating whether the subscription is the primary in the group. Applicable to scheme 1.
     *
     * @maps primary
     */
    public function setPrimary(?bool $primary): void
    {
        $this->primary = $primary;
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
        if (isset($this->uid)) {
            $json['uid']                     = $this->uid;
        }
        if (isset($this->scheme)) {
            $json['scheme']                  = $this->scheme;
        }
        if (isset($this->primarySubscriptionId)) {
            $json['primary_subscription_id'] = $this->primarySubscriptionId;
        }
        if (isset($this->primary)) {
            $json['primary']                 = $this->primary;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
