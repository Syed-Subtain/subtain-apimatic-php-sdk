
# Create Offer

## Structure

`CreateOffer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `components` | [`?(CreateOfferComponent[])`](../../doc/models/create-offer-component.md) | Optional | - | getComponents(): ?array | setComponents(?array components): void |
| `coupons` | `?(string[])` | Optional | - | getCoupons(): ?array | setCoupons(?array coupons): void |

## Example (as JSON)

```json
{
  "name": "name4",
  "handle": "handle0",
  "description": "description4",
  "product_id": 208,
  "product_price_point_id": 132
}
```

