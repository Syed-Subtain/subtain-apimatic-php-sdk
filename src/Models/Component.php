<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Component implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var array
     */
    private $pricingScheme = [];

    /**
     * @var string|null
     */
    private $unitName;

    /**
     * @var array
     */
    private $unitPrice = [];

    /**
     * @var int|null
     */
    private $productFamilyId;

    /**
     * @var string|null
     */
    private $productFamilyName;

    /**
     * @var array
     */
    private $pricePerUnitInCents = [];

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var bool|null
     */
    private $archived;

    /**
     * @var bool|null
     */
    private $taxable;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var int|null
     */
    private $defaultPricePointId;

    /**
     * @var array
     */
    private $prices = [];

    /**
     * @var int|null
     */
    private $pricePointCount;

    /**
     * @var string|null
     */
    private $pricePointsUrl;

    /**
     * @var string|null
     */
    private $defaultPricePointName;

    /**
     * @var array
     */
    private $taxCode = [];

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var array
     */
    private $downgradeCredit = [];

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $updatedAt;

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var bool|null
     */
    private $hideDateRangeOnInvoice;

    /**
     * @var bool|null
     */
    private $allowFractionalQuantities;

    /**
     * @var string|null
     */
    private $itemCategory;

    /**
     * @var array
     */
    private $useSiteExchangeRate = [];

    /**
     * @var array
     */
    private $accountingCode = [];

    /**
     * @var int|null
     */
    private $eventBasedBillingMetricId;

    /**
     * Returns Id.
     * The unique ID assigned to the component by Chargify. This ID can be used to fetch the component from
     * the API.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The unique ID assigned to the component by Chargify. This ID can be used to fetch the component from
     * the API.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
     * Returns Handle.
     * The component API handle
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * The component API handle
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Pricing Scheme.
     * The handle for the pricing scheme. Available options: per_unit, volume, tiered, stairstep. See
     * [Price Bracket Rules](https://chargify.zendesk.com/hc/en-us/articles/4407755865883#price-bracket-
     * rules) for an overview of pricing schemes.
     */
    public function getPricingScheme(): ?string
    {
        if (count($this->pricingScheme) == 0) {
            return null;
        }
        return $this->pricingScheme['value'];
    }

    /**
     * Sets Pricing Scheme.
     * The handle for the pricing scheme. Available options: per_unit, volume, tiered, stairstep. See
     * [Price Bracket Rules](https://chargify.zendesk.com/hc/en-us/articles/4407755865883#price-bracket-
     * rules) for an overview of pricing schemes.
     *
     * @maps pricing_scheme
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme['value'] = $pricingScheme;
    }

    /**
     * Unsets Pricing Scheme.
     * The handle for the pricing scheme. Available options: per_unit, volume, tiered, stairstep. See
     * [Price Bracket Rules](https://chargify.zendesk.com/hc/en-us/articles/4407755865883#price-bracket-
     * rules) for an overview of pricing schemes.
     */
    public function unsetPricingScheme(): void
    {
        $this->pricingScheme = [];
    }

    /**
     * Returns Unit Name.
     * The name of the unit that the component’s usage is measured in. i.e. message
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * Sets Unit Name.
     * The name of the unit that the component’s usage is measured in. i.e. message
     *
     * @maps unit_name
     */
    public function setUnitName(?string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * Returns Unit Price.
     * The amount the customer will be charged per unit. This field is only populated for ‘per_unit’
     * pricing schemes, otherwise it may be null.
     */
    public function getUnitPrice(): ?string
    {
        if (count($this->unitPrice) == 0) {
            return null;
        }
        return $this->unitPrice['value'];
    }

    /**
     * Sets Unit Price.
     * The amount the customer will be charged per unit. This field is only populated for ‘per_unit’
     * pricing schemes, otherwise it may be null.
     *
     * @maps unit_price
     */
    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice['value'] = $unitPrice;
    }

    /**
     * Unsets Unit Price.
     * The amount the customer will be charged per unit. This field is only populated for ‘per_unit’
     * pricing schemes, otherwise it may be null.
     */
    public function unsetUnitPrice(): void
    {
        $this->unitPrice = [];
    }

    /**
     * Returns Product Family Id.
     * The id of the Product Family to which the Component belongs
     */
    public function getProductFamilyId(): ?int
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     * The id of the Product Family to which the Component belongs
     *
     * @maps product_family_id
     */
    public function setProductFamilyId(?int $productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Product Family Name.
     * The name of the Product Family to which the Component belongs
     */
    public function getProductFamilyName(): ?string
    {
        return $this->productFamilyName;
    }

    /**
     * Sets Product Family Name.
     * The name of the Product Family to which the Component belongs
     *
     * @maps product_family_name
     */
    public function setProductFamilyName(?string $productFamilyName): void
    {
        $this->productFamilyName = $productFamilyName;
    }

    /**
     * Returns Price Per Unit in Cents.
     * deprecated - use unit_price instead
     */
    public function getPricePerUnitInCents(): ?int
    {
        if (count($this->pricePerUnitInCents) == 0) {
            return null;
        }
        return $this->pricePerUnitInCents['value'];
    }

    /**
     * Sets Price Per Unit in Cents.
     * deprecated - use unit_price instead
     *
     * @maps price_per_unit_in_cents
     */
    public function setPricePerUnitInCents(?int $pricePerUnitInCents): void
    {
        $this->pricePerUnitInCents['value'] = $pricePerUnitInCents;
    }

    /**
     * Unsets Price Per Unit in Cents.
     * deprecated - use unit_price instead
     */
    public function unsetPricePerUnitInCents(): void
    {
        $this->pricePerUnitInCents = [];
    }

    /**
     * Returns Kind.
     * A handle for the component type
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * A handle for the component type
     *
     * @maps kind
     * @factory \AdvancedBillingLib\Models\ComponentKind::checkValue
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Archived.
     * Boolean flag describing whether a component is archived or not.
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    /**
     * Sets Archived.
     * Boolean flag describing whether a component is archived or not.
     *
     * @maps archived
     */
    public function setArchived(?bool $archived): void
    {
        $this->archived = $archived;
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
     * Returns Default Price Point Id.
     */
    public function getDefaultPricePointId(): ?int
    {
        return $this->defaultPricePointId;
    }

    /**
     * Sets Default Price Point Id.
     *
     * @maps default_price_point_id
     */
    public function setDefaultPricePointId(?int $defaultPricePointId): void
    {
        $this->defaultPricePointId = $defaultPricePointId;
    }

    /**
     * Returns Prices.
     * An array of price brackets. If the component uses the ‘per_unit’ pricing scheme, this array will be
     * empty.
     *
     * @return ComponentPrice[]|null
     */
    public function getPrices(): ?array
    {
        if (count($this->prices) == 0) {
            return null;
        }
        return $this->prices['value'];
    }

    /**
     * Sets Prices.
     * An array of price brackets. If the component uses the ‘per_unit’ pricing scheme, this array will be
     * empty.
     *
     * @maps prices
     *
     * @param ComponentPrice[]|null $prices
     */
    public function setPrices(?array $prices): void
    {
        $this->prices['value'] = $prices;
    }

    /**
     * Unsets Prices.
     * An array of price brackets. If the component uses the ‘per_unit’ pricing scheme, this array will be
     * empty.
     */
    public function unsetPrices(): void
    {
        $this->prices = [];
    }

    /**
     * Returns Price Point Count.
     * Count for the number of price points associated with the component
     */
    public function getPricePointCount(): ?int
    {
        return $this->pricePointCount;
    }

    /**
     * Sets Price Point Count.
     * Count for the number of price points associated with the component
     *
     * @maps price_point_count
     */
    public function setPricePointCount(?int $pricePointCount): void
    {
        $this->pricePointCount = $pricePointCount;
    }

    /**
     * Returns Price Points Url.
     * URL that points to the location to read the existing price points via GET request
     */
    public function getPricePointsUrl(): ?string
    {
        return $this->pricePointsUrl;
    }

    /**
     * Sets Price Points Url.
     * URL that points to the location to read the existing price points via GET request
     *
     * @maps price_points_url
     */
    public function setPricePointsUrl(?string $pricePointsUrl): void
    {
        $this->pricePointsUrl = $pricePointsUrl;
    }

    /**
     * Returns Default Price Point Name.
     */
    public function getDefaultPricePointName(): ?string
    {
        return $this->defaultPricePointName;
    }

    /**
     * Sets Default Price Point Name.
     *
     * @maps default_price_point_name
     */
    public function setDefaultPricePointName(?string $defaultPricePointName): void
    {
        $this->defaultPricePointName = $defaultPricePointName;
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
     * Returns Recurring.
     */
    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?bool $recurring): void
    {
        $this->recurring = $recurring;
    }

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
     * Returns Created At.
     * Timestamp indicating when this component was created
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Timestamp indicating when this component was created
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * Timestamp indicating when this component was updated
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * Timestamp indicating when this component was updated
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Archived At.
     * Timestamp indicating when this component was archived
     */
    public function getArchivedAt(): ?string
    {
        if (count($this->archivedAt) == 0) {
            return null;
        }
        return $this->archivedAt['value'];
    }

    /**
     * Sets Archived At.
     * Timestamp indicating when this component was archived
     *
     * @maps archived_at
     */
    public function setArchivedAt(?string $archivedAt): void
    {
        $this->archivedAt['value'] = $archivedAt;
    }

    /**
     * Unsets Archived At.
     * Timestamp indicating when this component was archived
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Hide Date Range on Invoice.
     * (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range
     * should show for the component on generated invoices.
     */
    public function getHideDateRangeOnInvoice(): ?bool
    {
        return $this->hideDateRangeOnInvoice;
    }

    /**
     * Sets Hide Date Range on Invoice.
     * (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range
     * should show for the component on generated invoices.
     *
     * @maps hide_date_range_on_invoice
     */
    public function setHideDateRangeOnInvoice(?bool $hideDateRangeOnInvoice): void
    {
        $this->hideDateRangeOnInvoice = $hideDateRangeOnInvoice;
    }

    /**
     * Returns Allow Fractional Quantities.
     */
    public function getAllowFractionalQuantities(): ?bool
    {
        return $this->allowFractionalQuantities;
    }

    /**
     * Sets Allow Fractional Quantities.
     *
     * @maps allow_fractional_quantities
     */
    public function setAllowFractionalQuantities(?bool $allowFractionalQuantities): void
    {
        $this->allowFractionalQuantities = $allowFractionalQuantities;
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
     * Returns Use Site Exchange Rate.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        if (count($this->useSiteExchangeRate) == 0) {
            return null;
        }
        return $this->useSiteExchangeRate['value'];
    }

    /**
     * Sets Use Site Exchange Rate.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate['value'] = $useSiteExchangeRate;
    }

    /**
     * Unsets Use Site Exchange Rate.
     */
    public function unsetUseSiteExchangeRate(): void
    {
        $this->useSiteExchangeRate = [];
    }

    /**
     * Returns Accounting Code.
     * E.g. Internal ID or SKU Number
     */
    public function getAccountingCode(): ?string
    {
        if (count($this->accountingCode) == 0) {
            return null;
        }
        return $this->accountingCode['value'];
    }

    /**
     * Sets Accounting Code.
     * E.g. Internal ID or SKU Number
     *
     * @maps accounting_code
     */
    public function setAccountingCode(?string $accountingCode): void
    {
        $this->accountingCode['value'] = $accountingCode;
    }

    /**
     * Unsets Accounting Code.
     * E.g. Internal ID or SKU Number
     */
    public function unsetAccountingCode(): void
    {
        $this->accountingCode = [];
    }

    /**
     * Returns Event Based Billing Metric Id.
     * (Only for Event Based Components) This is an ID of a metric attached to the component. This metric
     * is used to bill upon collected events.
     */
    public function getEventBasedBillingMetricId(): ?int
    {
        return $this->eventBasedBillingMetricId;
    }

    /**
     * Sets Event Based Billing Metric Id.
     * (Only for Event Based Components) This is an ID of a metric attached to the component. This metric
     * is used to bill upon collected events.
     *
     * @maps event_based_billing_metric_id
     */
    public function setEventBasedBillingMetricId(?int $eventBasedBillingMetricId): void
    {
        $this->eventBasedBillingMetricId = $eventBasedBillingMetricId;
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
            $json['id']                            = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                          = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                        = $this->handle;
        }
        if (!empty($this->pricingScheme)) {
            $json['pricing_scheme']                = $this->pricingScheme['value'];
        }
        if (isset($this->unitName)) {
            $json['unit_name']                     = $this->unitName;
        }
        if (!empty($this->unitPrice)) {
            $json['unit_price']                    = $this->unitPrice['value'];
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']             = $this->productFamilyId;
        }
        if (isset($this->productFamilyName)) {
            $json['product_family_name']           = $this->productFamilyName;
        }
        if (!empty($this->pricePerUnitInCents)) {
            $json['price_per_unit_in_cents']       = $this->pricePerUnitInCents['value'];
        }
        if (isset($this->kind)) {
            $json['kind']                          = ComponentKind::checkValue($this->kind);
        }
        if (isset($this->archived)) {
            $json['archived']                      = $this->archived;
        }
        if (isset($this->taxable)) {
            $json['taxable']                       = $this->taxable;
        }
        if (!empty($this->description)) {
            $json['description']                   = $this->description['value'];
        }
        if (isset($this->defaultPricePointId)) {
            $json['default_price_point_id']        = $this->defaultPricePointId;
        }
        if (!empty($this->prices)) {
            $json['prices']                        = $this->prices['value'];
        }
        if (isset($this->pricePointCount)) {
            $json['price_point_count']             = $this->pricePointCount;
        }
        if (isset($this->pricePointsUrl)) {
            $json['price_points_url']              = $this->pricePointsUrl;
        }
        if (isset($this->defaultPricePointName)) {
            $json['default_price_point_name']      = $this->defaultPricePointName;
        }
        if (!empty($this->taxCode)) {
            $json['tax_code']                      = $this->taxCode['value'];
        }
        if (isset($this->recurring)) {
            $json['recurring']                     = $this->recurring;
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']                = $this->upgradeCharge['value'];
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']              = $this->downgradeCredit['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']                    = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                    = $this->updatedAt;
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']                   = $this->archivedAt['value'];
        }
        if (isset($this->hideDateRangeOnInvoice)) {
            $json['hide_date_range_on_invoice']    = $this->hideDateRangeOnInvoice;
        }
        if (isset($this->allowFractionalQuantities)) {
            $json['allow_fractional_quantities']   = $this->allowFractionalQuantities;
        }
        if (isset($this->itemCategory)) {
            $json['item_category']                 = ItemCategory::checkValue($this->itemCategory);
        }
        if (!empty($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']        = $this->useSiteExchangeRate['value'];
        }
        if (!empty($this->accountingCode)) {
            $json['accounting_code']               = $this->accountingCode['value'];
        }
        if (isset($this->eventBasedBillingMetricId)) {
            $json['event_based_billing_metric_id'] = $this->eventBasedBillingMetricId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
