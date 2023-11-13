
# Custom Price Used for Subscription Create Update

(Optional) Used in place of `product_price_point_id` to define a custom price point unique to the subscription

## Structure

`CustomPriceUsedForSubscriptionCreateUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | (Optional) | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | (Optional) | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | string\|int\|null | Optional | This is a container for one-of cases. | getPriceInCents(): | setPriceInCents( priceInCents): void |
| `interval` | string\|int\|null | Optional | This is a container for one-of cases. | getInterval(): | setInterval( interval): void |
| `intervalUnit` | string([IntervalUnit](../../doc/models/interval-unit.md))\|null | Optional | This is a container for one-of cases. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `trialPriceInCents` | string\|int\|null | Optional | This is a container for one-of cases. | getTrialPriceInCents(): | setTrialPriceInCents( trialPriceInCents): void |
| `trialInterval` | string\|int\|null | Optional | This is a container for one-of cases. | getTrialInterval(): | setTrialInterval( trialInterval): void |
| `trialIntervalUnit` | string([IntervalUnit](../../doc/models/interval-unit.md))\|null | Optional | This is a container for one-of cases. | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `initialChargeInCents` | string\|int\|null | Optional | This is a container for one-of cases. | getInitialChargeInCents(): | setInitialChargeInCents( initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | (Optional) | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | string\|int\|null | Optional | This is a container for one-of cases. | getExpirationInterval(): | setExpirationInterval( expirationInterval): void |
| `expirationIntervalUnit` | string([IntervalUnit](../../doc/models/interval-unit.md))\|null | Optional | This is a container for one-of cases. | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `taxIncluded` | `?bool` | Optional | (Optional) | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |

## Example (as JSON)

```json
{
  "name": "name4",
  "handle": "handle0",
  "price_in_cents": "String3",
  "interval": "String3",
  "interval_unit": "day"
}
```

