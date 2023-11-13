
# List Subscription Group Prepayment Response

## Structure

`ListSubscriptionGroupPrepaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prepayments` | [`ListSubscriptionGroupPrepayment[]`](../../doc/models/list-subscription-group-prepayment.md) | Required | - | getPrepayments(): array | setPrepayments(array prepayments): void |

## Example (as JSON)

```json
{
  "prepayments": [
    {
      "prepayment": {
        "id": 128.38,
        "subscription_group_uid": "subscription_group_uid2",
        "amount_in_cents": 108.76,
        "remaining_amount_in_cents": 160.54,
        "details": "details8"
      }
    }
  ]
}
```

