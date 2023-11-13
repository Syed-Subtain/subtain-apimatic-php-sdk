
# Update Segment

## Structure

`UpdateSegment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricingScheme` | `string` | Required | The handle for the pricing scheme. Available options: per_unit, volume, tiered, stairstep. See [Price Bracket Rules](https://help.chargify.com/products/product-components.html#price-bracket-rules) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(CreateOrUpdateSegmentPrice[])`](../../doc/models/create-or-update-segment-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example (as JSON)

```json
{
  "pricing_scheme": "pricing_scheme6",
  "prices": [
    {
      "starting_quantity": 64,
      "ending_quantity": 38,
      "unit_price": "String3"
    }
  ]
}
```

