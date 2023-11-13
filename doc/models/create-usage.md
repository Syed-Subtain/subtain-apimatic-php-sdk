
# Create Usage

## Structure

`CreateUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantity` | `?float` | Optional | integer by default or decimal number if fractional quantities are enabled for the component | getQuantity(): ?float | setQuantity(?float quantity): void |
| `pricePointId` | `?string` | Optional | - | getPricePointId(): ?string | setPricePointId(?string pricePointId): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |

## Example (as JSON)

```json
{
  "quantity": 23.44,
  "price_point_id": "price_point_id0",
  "memo": "memo2"
}
```

