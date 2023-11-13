
# Subscription Group Component Custom Price

Used in place of `price_point_id` to define a custom price point unique to the subscription. You still need to provide `component_id`.

## Structure

`SubscriptionGroupComponentCustomPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | string([PricingScheme](../../doc/models/pricing-scheme.md))\|null | Optional | This is a container for one-of cases. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `overagePricing` | [`?(ComponentCustomPrice[])`](../../doc/models/component-custom-price.md) | Optional | - | getOveragePricing(): ?array | setOveragePricing(?array overagePricing): void |

## Example (as JSON)

```json
{
  "pricing_scheme": "tiered",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ],
  "overage_pricing": [
    {
      "pricing_scheme": "volume",
      "prices": [
        {
          "starting_quantity": 242,
          "ending_quantity": 40,
          "unit_price": 23.26
        }
      ]
    }
  ]
}
```

