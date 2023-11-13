<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateComponent implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var string|null
     */
    private $accountingCode;

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var array
     */
    private $taxCode = [];

    /**
     * @var string|null
     */
    private $itemCategory;

    /**
     * @var bool|null
     */
    private $displayOnHostedPage;

    /**
     * @var string|null
     */
    private $upgradeCharge;

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
     * Returns Name.
     * The name of the Component, suitable for display on statements. i.e. Text Messages.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the Component, suitable for display on statements. i.e. Text Messages.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Description.
     * The description of the component.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * The description of the component.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * The description of the component.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
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
     * Returns Taxable.
     * Boolean flag describing whether a component is taxable or not.
     */
    public function getTaxable(): ?bool
    {
        return $this->taxable;
    }

    /**
     * Sets Taxable.
     * Boolean flag describing whether a component is taxable or not.
     *
     * @maps taxable
     */
    public function setTaxable(?bool $taxable): void
    {
        $this->taxable = $taxable;
    }

    /**
     * Returns Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function getTaxCode(): ?string
    {
        if (count($this->taxCode) == 0) {
            return null;
        }
        return $this->taxCode['value'];
    }

    /**
     * Sets Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode['value'] = $taxCode;
    }

    /**
     * Unsets Tax Code.
     * A string representing the tax code related to the component type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function unsetTaxCode(): void
    {
        $this->taxCode = [];
    }

    /**
     * Returns Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     */
    public function getItemCategory(): ?string
    {
        return $this->itemCategory;
    }

    /**
     * Sets Item Category.
     * One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other
     *
     * @maps item_category
     * @factory \AdvancedBillingLib\Models\ItemCategory::checkValue
     */
    public function setItemCategory(?string $itemCategory): void
    {
        $this->itemCategory = $itemCategory;
    }

    /**
     * Returns Display on Hosted Page.
     */
    public function getDisplayOnHostedPage(): ?bool
    {
        return $this->displayOnHostedPage;
    }

    /**
     * Sets Display on Hosted Page.
     *
     * @maps display_on_hosted_page
     */
    public function setDisplayOnHostedPage(?bool $displayOnHostedPage): void
    {
        $this->displayOnHostedPage = $displayOnHostedPage;
    }

    /**
     * Returns Upgrade Charge.
     * The type of charge to be applied when a component is upgraded. Valid values are: `prorated`, `full`,
     * `none`.
     */
    public function getUpgradeCharge(): ?string
    {
        return $this->upgradeCharge;
    }

    /**
     * Sets Upgrade Charge.
     * The type of charge to be applied when a component is upgraded. Valid values are: `prorated`, `full`,
     * `none`.
     *
     * @maps upgrade_charge
     * @factory \AdvancedBillingLib\Models\CreditType::checkValue
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge = $upgradeCharge;
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
        if (isset($this->handle)) {
            $json['handle']                 = $this->handle;
        }
        if (isset($this->name)) {
            $json['name']                   = $this->name;
        }
        if (!empty($this->description)) {
            $json['description']            = $this->description['value'];
        }
        if (isset($this->accountingCode)) {
            $json['accounting_code']        = $this->accountingCode;
        }
        if (isset($this->taxable)) {
            $json['taxable']                = $this->taxable;
        }
        if (!empty($this->taxCode)) {
            $json['tax_code']               = $this->taxCode['value'];
        }
        if (isset($this->itemCategory)) {
            $json['item_category']          = ItemCategory::checkValue($this->itemCategory);
        }
        if (isset($this->displayOnHostedPage)) {
            $json['display_on_hosted_page'] = $this->displayOnHostedPage;
        }
        if (isset($this->upgradeCharge)) {
            $json['upgrade_charge']         = CreditType::checkValue($this->upgradeCharge);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
