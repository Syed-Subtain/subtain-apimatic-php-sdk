<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class AllocateComponents implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $prorationUpgradeScheme = 'no-prorate';

    /**
     * @var string|null
     */
    private $prorationDowngradeScheme = 'no-prorate';

    /**
     * @var CreateAllocationRequest[]|null
     */
    private $allocations;

    /**
     * @var bool|null
     */
    private $accrueCharge;

    /**
     * @var string|null
     */
    private $upgradeCharge;

    /**
     * @var string|null
     */
    private $downgradeCredit;

    /**
     * @var string|null
     */
    private $paymentCollectionMethod = PaymentCollectionMethod1::AUTOMATIC;

    /**
     * Returns Proration Upgrade Scheme.
     */
    public function getProrationUpgradeScheme(): ?string
    {
        return $this->prorationUpgradeScheme;
    }

    /**
     * Sets Proration Upgrade Scheme.
     *
     * @maps proration_upgrade_scheme
     */
    public function setProrationUpgradeScheme(?string $prorationUpgradeScheme): void
    {
        $this->prorationUpgradeScheme = $prorationUpgradeScheme;
    }

    /**
     * Returns Proration Downgrade Scheme.
     */
    public function getProrationDowngradeScheme(): ?string
    {
        return $this->prorationDowngradeScheme;
    }

    /**
     * Sets Proration Downgrade Scheme.
     *
     * @maps proration_downgrade_scheme
     */
    public function setProrationDowngradeScheme(?string $prorationDowngradeScheme): void
    {
        $this->prorationDowngradeScheme = $prorationDowngradeScheme;
    }

    /**
     * Returns Allocations.
     *
     * @return CreateAllocationRequest[]|null
     */
    public function getAllocations(): ?array
    {
        return $this->allocations;
    }

    /**
     * Sets Allocations.
     *
     * @maps allocations
     *
     * @param CreateAllocationRequest[]|null $allocations
     */
    public function setAllocations(?array $allocations): void
    {
        $this->allocations = $allocations;
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
     * Returns Upgrade Charge.
     */
    public function getUpgradeCharge(): ?string
    {
        return $this->upgradeCharge;
    }

    /**
     * Sets Upgrade Charge.
     *
     * @maps upgrade_charge
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge = $upgradeCharge;
    }

    /**
     * Returns Downgrade Credit.
     */
    public function getDowngradeCredit(): ?string
    {
        return $this->downgradeCredit;
    }

    /**
     * Sets Downgrade Credit.
     *
     * @maps downgrade_credit
     */
    public function setDowngradeCredit(?string $downgradeCredit): void
    {
        $this->downgradeCredit = $downgradeCredit;
    }

    /**
     * Returns Payment Collection Method.
     * (Optional) If not passed, the allocation(s) will use the payment collection method on the
     * subscription
     */
    public function getPaymentCollectionMethod(): ?string
    {
        return $this->paymentCollectionMethod;
    }

    /**
     * Sets Payment Collection Method.
     * (Optional) If not passed, the allocation(s) will use the payment collection method on the
     * subscription
     *
     * @maps payment_collection_method
     * @factory \AdvancedBillingLib\Models\PaymentCollectionMethod1::checkValue
     */
    public function setPaymentCollectionMethod(?string $paymentCollectionMethod): void
    {
        $this->paymentCollectionMethod = $paymentCollectionMethod;
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
        if (isset($this->prorationUpgradeScheme)) {
            $json['proration_upgrade_scheme']   = $this->prorationUpgradeScheme;
        }
        if (isset($this->prorationDowngradeScheme)) {
            $json['proration_downgrade_scheme'] = $this->prorationDowngradeScheme;
        }
        if (isset($this->allocations)) {
            $json['allocations']                = $this->allocations;
        }
        if (isset($this->accrueCharge)) {
            $json['accrue_charge']              = $this->accrueCharge;
        }
        if (isset($this->upgradeCharge)) {
            $json['upgrade_charge']             = $this->upgradeCharge;
        }
        if (isset($this->downgradeCredit)) {
            $json['downgrade_credit']           = $this->downgradeCredit;
        }
        if (isset($this->paymentCollectionMethod)) {
            $json['payment_collection_method']  = PaymentCollectionMethod1::checkValue($this->paymentCollectionMethod);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
