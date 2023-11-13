
# Product Price Point

## Structure

`ProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | `?int` | Optional | - | getPriceInCents(): ?int | setPriceInCents(?int priceInCents): void |
| `interval` | `?int` | Optional | - | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | `?string` | Optional | - | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `trialPriceInCents` | `?int` | Optional | - | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | - | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | `?string` | Optional | - | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | `?string` | Optional | - | getTrialType(): ?string | setTrialType(?string trialType): void |
| `introductoryOffer` | `?bool` | Optional | reserved for future use | getIntroductoryOffer(): ?bool | setIntroductoryOffer(?bool introductoryOffer): void |
| `initialChargeInCents` | `?int` | Optional | - | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | - | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | `?int` | Optional | - | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | `?string` | Optional | - | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `archivedAt` | `?string` | Optional | - | getArchivedAt(): ?string | setArchivedAt(?string archivedAt): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether or not to use the site's exchange rate or define your own pricing when your site has multiple currencies defined. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `type` | [`?string(PricePointType)`](../../doc/models/price-point-type.md) | Optional | Price point type. We expose the following types:<br><br>1. **default**: a price point that is marked as a default price for a certain product.<br>2. **custom**: a custom price point.<br>3. **catalog**: a price point that is **not** marked as a default price for a certain product and is **not** a custom one. | getType(): ?string | setType(?string type): void |
| `taxIncluded` | `?bool` | Optional | - | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `subscriptionId` | `?int` | Optional | - | getSubscriptionId(): ?int | setSubscriptionId(?int subscriptionId): void |

## Example (as JSON)

```json
{
  "id": 196,
  "name": "name6",
  "handle": "handle2",
  "price_in_cents": 248,
  "interval": 8
}
```

