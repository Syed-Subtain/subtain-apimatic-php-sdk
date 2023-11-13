
# Event

## Structure

`Event`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `float` | Required | - | getId(): float | setId(float id): void |
| `key` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getKey(): string | setKey(string key): void |
| `message` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getMessage(): string | setMessage(string message): void |
| `subscriptionId` | `float` | Required | - | getSubscriptionId(): float | setSubscriptionId(float subscriptionId): void |
| `customerId` | `float` | Required | - | getCustomerId(): float | setCustomerId(float customerId): void |
| `createdAt` | `string` | Required | **Constraints**: *Minimum Length*: `1` | getCreatedAt(): string | setCreatedAt(string createdAt): void |
| `eventSpecificData` | [SubscriptionProductChange](../../doc/models/subscription-product-change.md)\|[SubscriptionStateChange](../../doc/models/subscription-state-change.md)\|[PaymentRelatedEvents](../../doc/models/payment-related-events.md)\|[RefundSuccess](../../doc/models/refund-success.md)\|[ComponentAllocationChange](../../doc/models/component-allocation-change.md)\|[MeteredUsage](../../doc/models/metered-usage.md)\|[PrepaidUsage](../../doc/models/prepaid-usage.md)\|[DunningStepReached](../../doc/models/dunning-step-reached.md)\|[InvoiceIssued](../../doc/models/invoice-issued.md)\|[PendingCancellationChange](../../doc/models/pending-cancellation-change.md)\|[PrepaidSubscriptionBalanceChanged](../../doc/models/prepaid-subscription-balance-changed.md)\|Proforma[InvoiceIssued](../../doc/models/invoice-issued.md)\|[SubscriptionGroupSignupSuccess](../../doc/models/subscription-group-signup-success.md)\|[SubscriptionGroupSignupFailure](../../doc/models/subscription-group-signup-failure.md)\|[CreditAccountBalanceChanged](../../doc/models/credit-account-balance-changed.md)\|[PrepaymentAccountBalanceChanged](../../doc/models/prepayment-account-balance-changed.md)\|[PaymentCollectionMethod](../../doc/models/payment-collection-method.md)Changed\|[ItemPricePointChanged](../../doc/models/item-price-point-changed.md)\|[CustomFieldValueChange](../../doc/models/custom-field-value-change.md)\|null | Required | This is a container for one-of cases. | getEventSpecificData(): | setEventSpecificData( eventSpecificData): void |

## Example (as JSON)

```json
{
  "id": 159.12,
  "key": "key2",
  "message": "message8",
  "subscription_id": 185.82,
  "customer_id": 31.5,
  "created_at": "created_at0",
  "event_specific_data": {
    "previous_unit_balance": null,
    "previous_overage_unit_balance": null,
    "new_unit_balance": null,
    "new_overage_unit_balance": null,
    "usage_quantity": null,
    "overage_usage_quantity": null,
    "component_id": null,
    "component_handle": null,
    "memo": null,
    "allocation_details": [
      null
    ],
    "previous_product_id": 126,
    "new_product_id": 12
  }
}
```

