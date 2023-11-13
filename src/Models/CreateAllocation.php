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

class CreateAllocation implements \JsonSerializable
{
    /**
     * @var float
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $prorationDowngradeScheme;

    /**
     * @var string|null
     */
    private $prorationUpgradeScheme;

    /**
     * @var bool|null
     */
    private $accrueCharge;

    /**
     * @var string|null
     */
    private $downgradeCredit;

    /**
     * @var string|null
     */
    private $upgradeCharge;

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @param float $quantity
     */
    public function __construct(float $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Quantity.
     * The allocated quantity to which to set the line-items allocated quantity. By default, this is an
     * integer. If decimal allocations are enabled for the component, it will be a decimal number. For
     * On/Off components, use 1for on and 0 for off.
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The allocated quantity to which to set the line-items allocated quantity. By default, this is an
     * integer. If decimal allocations are enabled for the component, it will be a decimal number. For
     * On/Off components, use 1for on and 0 for off.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Component Id.
     * (required for the multiple allocations endpoint) The id associated with the component for which the
     * allocation is being made
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     * (required for the multiple allocations endpoint) The id associated with the component for which the
     * allocation is being made
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Memo.
     * A memo to record along with the allocation
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A memo to record along with the allocation
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Proration Downgrade Scheme.
     * The scheme used if the proration is a downgrade. Defaults to the site setting if one is not provided.
     */
    public function getProrationDowngradeScheme(): ?string
    {
        return $this->prorationDowngradeScheme;
    }

    /**
     * Sets Proration Downgrade Scheme.
     * The scheme used if the proration is a downgrade. Defaults to the site setting if one is not provided.
     *
     * @maps proration_downgrade_scheme
     */
    public function setProrationDowngradeScheme(?string $prorationDowngradeScheme): void
    {
        $this->prorationDowngradeScheme = $prorationDowngradeScheme;
    }

    /**
     * Returns Proration Upgrade Scheme.
     * The scheme used if the proration is an upgrade. Defaults to the site setting if one is not provided.
     */
    public function getProrationUpgradeScheme(): ?string
    {
        return $this->prorationUpgradeScheme;
    }

    /**
     * Sets Proration Upgrade Scheme.
     * The scheme used if the proration is an upgrade. Defaults to the site setting if one is not provided.
     *
     * @maps proration_upgrade_scheme
     */
    public function setProrationUpgradeScheme(?string $prorationUpgradeScheme): void
    {
        $this->prorationUpgradeScheme = $prorationUpgradeScheme;
    }

    /**
     * Returns Accrue Charge.
     * If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal
     * or if capture should be attempted immediately. Defaults to the site setting if one is not provided.
     */
    public function getAccrueCharge(): ?bool
    {
        return $this->accrueCharge;
    }

    /**
     * Sets Accrue Charge.
     * If the change in cost is an upgrade, this determines if the charge should accrue to the next renewal
     * or if capture should be attempted immediately. Defaults to the site setting if one is not provided.
     *
     * @maps accrue_charge
     */
    public function setAccrueCharge(?bool $accrueCharge): void
    {
        $this->accrueCharge = $accrueCharge;
    }

    /**
     * Returns Downgrade Credit.
     * The type of credit to be created if the change in cost is a downgrade. Defaults to the component and
     * then site setting if one is not provided.
     */
    public function getDowngradeCredit(): ?string
    {
        return $this->downgradeCredit;
    }

    /**
     * Sets Downgrade Credit.
     * The type of credit to be created if the change in cost is a downgrade. Defaults to the component and
     * then site setting if one is not provided.
     *
     * @maps downgrade_credit
     * @factory \AdvancedBillingLib\Models\CreditType1::checkValue
     */
    public function setDowngradeCredit(?string $downgradeCredit): void
    {
        $this->downgradeCredit = $downgradeCredit;
    }

    /**
     * Returns Upgrade Charge.
     * The type of charge to be created if the change in cost is an upgrade. Defaults to the component and
     * then site setting if one is not provided.
     */
    public function getUpgradeCharge(): ?string
    {
        return $this->upgradeCharge;
    }

    /**
     * Sets Upgrade Charge.
     * The type of charge to be created if the change in cost is an upgrade. Defaults to the component and
     * then site setting if one is not provided.
     *
     * @maps upgrade_charge
     * @factory \AdvancedBillingLib\Models\CreditType1::checkValue
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge = $upgradeCharge;
    }

    /**
     * Returns Price Point Id.
     * Price point that the allocation should be charged at. Accepts either the price point's id (integer)
     * or handle (string). When not specified, the default price point will be used.
     *
     * @return string|int|null
     */
    public function getPricePointId()
    {
        if (count($this->pricePointId) == 0) {
            return null;
        }
        return $this->pricePointId['value'];
    }

    /**
     * Sets Price Point Id.
     * Price point that the allocation should be charged at. Accepts either the price point's id (integer)
     * or handle (string). When not specified, the default price point will be used.
     *
     * @maps price_point_id
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $pricePointId
     */
    public function setPricePointId($pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     * Price point that the allocation should be charged at. Accepts either the price point's id (integer)
     * or handle (string). When not specified, the default price point will be used.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
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
        $json['quantity']                       = $this->quantity;
        if (isset($this->componentId)) {
            $json['component_id']               = $this->componentId;
        }
        if (isset($this->memo)) {
            $json['memo']                       = $this->memo;
        }
        if (isset($this->prorationDowngradeScheme)) {
            $json['proration_downgrade_scheme'] = $this->prorationDowngradeScheme;
        }
        if (isset($this->prorationUpgradeScheme)) {
            $json['proration_upgrade_scheme']   = $this->prorationUpgradeScheme;
        }
        if (isset($this->accrueCharge)) {
            $json['accrue_charge']              = $this->accrueCharge;
        }
        if (isset($this->downgradeCredit)) {
            $json['downgrade_credit']           = CreditType1::checkValue($this->downgradeCredit);
        }
        if (isset($this->upgradeCharge)) {
            $json['upgrade_charge']             = CreditType1::checkValue($this->upgradeCharge);
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointId['value'],
                    'anyOf(oneOf(string,int),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
