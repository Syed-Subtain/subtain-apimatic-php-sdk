
# Create Component Price Point Request

## Structure

`CreateComponentPricePointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pricePoint` | [CreateComponentPricePoint](../../doc/models/create-component-price-point.md)\|Create[PrepaidUsage](../../doc/models/prepaid-usage.md)ComponentPricePoint | Required | This is a container for any-of cases. | getPricePoint(): | setPricePoint( pricePoint): void |

## Example (as JSON)

```json
{
  "price_point": {
    "name": "name0",
    "pricing_scheme": "pricing_scheme8",
    "prices": [
      {
        "starting_quantity": 242,
        "ending_quantity": 40,
        "unit_price": 23.26
      }
    ],
    "use_site_exchange_rate": true,
    "handle": "handle6"
  }
}
```

