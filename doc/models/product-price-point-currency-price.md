
# Product Price Point Currency Price

object Product Price Point Currency Price:

## Structure

`ProductPricePointCurrencyPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `price` | `?int` | Optional | - | getPrice(): ?int | setPrice(?int price): void |
| `formattedPrice` | `?string` | Optional | - | getFormattedPrice(): ?string | setFormattedPrice(?string formattedPrice): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `role` | [`?string(CurrencyPriceRole)`](../../doc/models/currency-price-role.md) | Optional | Role for the price. | getRole(): ?string | setRole(?string role): void |

## Example (as JSON)

```json
{
  "id": 254,
  "currency": "currency2",
  "price": 130,
  "formatted_price": "formatted_price0",
  "product_price_point_id": 120
}
```

