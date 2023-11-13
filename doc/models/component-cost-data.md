
# Component Cost Data

## Structure

`ComponentCostData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentCodeId` | `?int` | Optional | - | getComponentCodeId(): ?int | setComponentCodeId(?int componentCodeId): void |
| `pricePointId` | `?int` | Optional | - | getPricePointId(): ?int | setPricePointId(?int pricePointId): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `quantity` | `?string` | Optional | - | getQuantity(): ?string | setQuantity(?string quantity): void |
| `amount` | `?string` | Optional | - | getAmount(): ?string | setAmount(?string amount): void |
| `pricingScheme` | string([PricingScheme](../../doc/models/pricing-scheme.md))\|null | Optional | This is a container for one-of cases. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `tiers` | [`?(ComponentCostDataRateTier[])`](../../doc/models/component-cost-data-rate-tier.md) | Optional | - | getTiers(): ?array | setTiers(?array tiers): void |

## Example (as JSON)

```json
{
  "component_code_id": 16,
  "price_point_id": 186,
  "product_id": 250,
  "quantity": "quantity8",
  "amount": "amount4"
}
```

