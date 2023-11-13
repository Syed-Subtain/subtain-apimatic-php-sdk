
# Allocation Payment

Information for captured payment, if applicable

## Structure

`AllocationPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?float` | Optional | - | getId(): ?float | setId(?float id): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `success` | `?bool` | Optional | - | getSuccess(): ?bool | setSuccess(?bool success): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |

## Example (as JSON)

```json
{
  "id": 108.98,
  "amount_in_cents": 232,
  "success": false,
  "memo": "memo2"
}
```

