
# Subscription MRR

## Structure

`SubscriptionMRR`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscriptionId` | `float` | Required | - | getSubscriptionId(): float | setSubscriptionId(float subscriptionId): void |
| `mrrAmountInCents` | `float` | Required | - | getMrrAmountInCents(): float | setMrrAmountInCents(float mrrAmountInCents): void |
| `breakouts` | [`?SubscriptionMRRBreakout`](../../doc/models/subscription-mrr-breakout.md) | Optional | - | getBreakouts(): ?SubscriptionMRRBreakout | setBreakouts(?SubscriptionMRRBreakout breakouts): void |

## Example (as JSON)

```json
{
  "subscription_id": 58.92,
  "mrr_amount_in_cents": 133.34,
  "breakouts": {
    "plan_amount_in_cents": 138.22,
    "usage_amount_in_cents": 236.58
  }
}
```

