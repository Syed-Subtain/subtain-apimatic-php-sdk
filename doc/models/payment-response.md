
# Payment Response

## Structure

`PaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paidInvoices` | [`?(Payment[])`](../../doc/models/payment.md) | Optional | - | getPaidInvoices(): ?array | setPaidInvoices(?array paidInvoices): void |
| `prepayment` | [`?PrePayment`](../../doc/models/pre-payment.md) | Optional | - | getPrepayment(): ?PrePayment | setPrepayment(?PrePayment prepayment): void |

## Example (as JSON)

```json
{
  "paid_invoices": [
    {
      "invoice_uid": "invoice_uid8",
      "status": "draft",
      "due_amount": "due_amount0",
      "paid_amount": "paid_amount0"
    }
  ],
  "prepayment": {
    "subscription_id": "subscription_id8",
    "amount_in_cents": "amount_in_cents6",
    "ending_balance_in_cents": "ending_balance_in_cents4"
  }
}
```

