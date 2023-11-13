
# Prepayment 1

## Structure

`Prepayment1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `float` | Required | - | getId(): float | setId(float id): void |
| `subscriptionId` | `float` | Required | - | getSubscriptionId(): float | setSubscriptionId(float subscriptionId): void |
| `amountInCents` | `float` | Required | - | getAmountInCents(): float | setAmountInCents(float amountInCents): void |
| `remainingAmountInCents` | `float` | Required | - | getRemainingAmountInCents(): float | setRemainingAmountInCents(float remainingAmountInCents): void |
| `refundedAmountInCents` | `?float` | Optional | - | getRefundedAmountInCents(): ?float | setRefundedAmountInCents(?float refundedAmountInCents): void |
| `details` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getDetails(): ?string | setDetails(?string details): void |
| `external` | `bool` | Required | - | getExternal(): bool | setExternal(bool external): void |
| `memo` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMemo(): string | setMemo(string memo): void |
| `paymentType` | [`?string(PrepaymentMethod)`](../../doc/models/prepayment-method.md) | Optional | The payment type of the prepayment. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `createdAt` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCreatedAt(): string | setCreatedAt(string createdAt): void |

## Example (as JSON)

```json
{
  "id": 52.0,
  "subscription_id": 78.7,
  "amount_in_cents": 32.38,
  "remaining_amount_in_cents": 84.16,
  "refunded_amount_in_cents": 109.26,
  "details": "details0",
  "external": false,
  "memo": "memo4",
  "payment_type": "ach",
  "created_at": "created_at8"
}
```

