<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AllocationSettings implements \JsonSerializable
{
    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var array
     */
    private $downgradeCredit = [];

    /**
     * @var bool|null
     */
    private $accrueCharge;

    /**
     * Returns Upgrade Charge.
     */
    public function getUpgradeCharge(): ?string
    {
        if (count($this->upgradeCharge) == 0) {
            return null;
        }
        return $this->upgradeCharge['value'];
    }

    /**
     * Sets Upgrade Charge.
     *
     * @maps upgrade_charge
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge['value'] = $upgradeCharge;
    }

    /**
     * Unsets Upgrade Charge.
     */
    public function unsetUpgradeCharge(): void
    {
        $this->upgradeCharge = [];
    }

    /**
     * Returns Downgrade Credit.
     */
    public function getDowngradeCredit(): ?string
    {
        if (count($this->downgradeCredit) == 0) {
            return null;
        }
        return $this->downgradeCredit['value'];
    }

    /**
     * Sets Downgrade Credit.
     *
     * @maps downgrade_credit
     */
    public function setDowngradeCredit(?string $downgradeCredit): void
    {
        $this->downgradeCredit['value'] = $downgradeCredit;
    }

    /**
     * Unsets Downgrade Credit.
     */
    public function unsetDowngradeCredit(): void
    {
        $this->downgradeCredit = [];
    }

    /**
     * Returns Accrue Charge.
     */
    public function getAccrueCharge(): ?bool
    {
        return $this->accrueCharge;
    }

    /**
     * Sets Accrue Charge.
     *
     * @maps accrue_charge
     */
    public function setAccrueCharge(?bool $accrueCharge): void
    {
        $this->accrueCharge = $accrueCharge;
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
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']   = $this->upgradeCharge['value'];
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit'] = $this->downgradeCredit['value'];
        }
        if (isset($this->accrueCharge)) {
            $json['accrue_charge']    = $this->accrueCharge;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
