
# Overage Pricing

## Structure

`OveragePricing`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | string([PricingScheme](../../doc/models/pricing-scheme.md)) | Required | This is a container for one-of cases. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example (as JSON)

```json
{
  "pricing_scheme": "volume",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    },
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    },
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ]
}
```

