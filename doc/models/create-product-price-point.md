
# Create Product Price Point

## Structure

`CreateProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | `int` | Required | - | getPriceInCents(): int | setPriceInCents(int priceInCents): void |
| `interval` | `int` | Required | - | getInterval(): int | setInterval(int interval): void |
| `intervalUnit` | `string` | Required | - | getIntervalUnit(): string | setIntervalUnit(string intervalUnit): void |
| `trialPriceInCents` | `?int` | Optional | - | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | - | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | `?string` | Optional | - | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | `?string` | Optional | - | getTrialType(): ?string | setTrialType(?string trialType): void |
| `initialChargeInCents` | `?int` | Optional | - | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | - | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | `?int` | Optional | - | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | `?string` | Optional | - | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether or not to use the site's exchange rate or define your own pricing when your site has multiple currencies defined.<br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |

## Example (as JSON)

```json
{
  "name": "name6",
  "price_in_cents": 216,
  "interval": 200,
  "interval_unit": "interval_unit6",
  "use_site_exchange_rate": true,
  "handle": "handle2",
  "trial_price_in_cents": 48,
  "trial_interval": 102,
  "trial_interval_unit": "trial_interval_unit0",
  "trial_type": "trial_type0"
}
```

