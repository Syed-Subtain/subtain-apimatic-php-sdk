
# Component Price Point Error Exception

## Structure

`ComponentPricePointErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(ComponentPricePointErrorItem[])`](../../doc/models/component-price-point-error-item.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "errors": [
    {
      "component_id": 122.68,
      "message": "message0",
      "price_point": 85.7
    },
    {
      "component_id": 122.68,
      "message": "message0",
      "price_point": 85.7
    }
  ]
}
```

