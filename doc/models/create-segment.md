
# Create Segment

## Structure

`CreateSegment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `segmentProperty1Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty1Value(): | setSegmentProperty1Value( segmentProperty1Value): void |
| `segmentProperty2Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty2Value(): | setSegmentProperty2Value( segmentProperty2Value): void |
| `segmentProperty3Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty3Value(): | setSegmentProperty3Value( segmentProperty3Value): void |
| `segmentProperty4Value` | string\|float\|int\|bool\|null | Optional | This is a container for one-of cases. | getSegmentProperty4Value(): | setSegmentProperty4Value( segmentProperty4Value): void |
| `pricingScheme` | `string` | Required | The handle for the pricing scheme. Available options: per_unit, volume, tiered, stairstep. See [Price Bracket Rules](https://help.chargify.com/products/product-components.html#price-bracket-rules) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(CreateOrUpdateSegmentPrice[])`](../../doc/models/create-or-update-segment-price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |

## Example (as JSON)

```json
{
  "segment_property_1_value": "String9",
  "segment_property_2_value": "String1",
  "segment_property_3_value": "String3",
  "segment_property_4_value": "String3",
  "pricing_scheme": "pricing_scheme6",
  "prices": [
    {
      "starting_quantity": 64,
      "ending_quantity": 38,
      "unit_price": "String3"
    },
    {
      "starting_quantity": 64,
      "ending_quantity": 38,
      "unit_price": "String3"
    },
    {
      "starting_quantity": 64,
      "ending_quantity": 38,
      "unit_price": "String3"
    }
  ]
}
```

