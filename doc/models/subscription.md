
# Subscription

## Structure

`Subscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | The subscription unique id within Chargify. | getId(): ?int | setId(?int id): void |
| `state` | `?string` | Optional | The current state of the subscription. Please see the documentation for [Subscription States](https://help.chargify.com/subscriptions/subscription-states.html) | getState(): ?string | setState(?string state): void |
| `balanceInCents` | `?int` | Optional | Gives the current outstanding subscription balance in the number of cents. | getBalanceInCents(): ?int | setBalanceInCents(?int balanceInCents): void |
| `totalRevenueInCents` | `?int` | Optional | Gives the total revenue from the subscription in the number of cents. | getTotalRevenueInCents(): ?int | setTotalRevenueInCents(?int totalRevenueInCents): void |
| `productPriceInCents` | `?int` | Optional | (Added Nov 5 2013) The recurring amount of the product (and version),currently subscribed. NOTE: this may differ from the current price of,the product, if you’ve changed the price of the product but haven’t,moved this subscription to a newer version. | getProductPriceInCents(): ?int | setProductPriceInCents(?int productPriceInCents): void |
| `productVersionNumber` | `?int` | Optional | The version of the product for the subscription. Note that this is a deprecated field kept for backwards-compatibility. | getProductVersionNumber(): ?int | setProductVersionNumber(?int productVersionNumber): void |
| `currentPeriodEndsAt` | `?string` | Optional | Timestamp relating to the end of the current (recurring) period (i.e.,when the next regularly scheduled attempted charge will occur) | getCurrentPeriodEndsAt(): ?string | setCurrentPeriodEndsAt(?string currentPeriodEndsAt): void |
| `nextAssessmentAt` | `?string` | Optional | Timestamp that indicates when capture of payment will be tried or,retried. This value will usually track the current_period_ends_at, but,will diverge if a renewal payment fails and must be retried. In that,case, the current_period_ends_at will advance to the end of the next,period (time doesn’t stop because a payment was missed) but the,next_assessment_at will be scheduled for the auto-retry time (i.e. 24,hours in the future, in some cases) | getNextAssessmentAt(): ?string | setNextAssessmentAt(?string nextAssessmentAt): void |
| `trialStartedAt` | `?string` | Optional | Timestamp for when the trial period (if any) began | getTrialStartedAt(): ?string | setTrialStartedAt(?string trialStartedAt): void |
| `trialEndedAt` | `?string` | Optional | Timestamp for when the trial period (if any) ended | getTrialEndedAt(): ?string | setTrialEndedAt(?string trialEndedAt): void |
| `activatedAt` | `?string` | Optional | Timestamp for when the subscription began (i.e. when it came out of trial, or when it began in the case of no trial) | getActivatedAt(): ?string | setActivatedAt(?string activatedAt): void |
| `expiresAt` | `?string` | Optional | Timestamp giving the expiration date of this subscription (if any) | getExpiresAt(): ?string | setExpiresAt(?string expiresAt): void |
| `createdAt` | `?string` | Optional | The creation date for this subscription | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | The date of last update for this subscription | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `cancellationMessage` | `?string` | Optional | Seller-provided reason for, or note about, the cancellation. | getCancellationMessage(): ?string | setCancellationMessage(?string cancellationMessage): void |
| `cancellationMethod` | string([CancellationMethod](../../doc/models/cancellation-method.md))\|null | Optional | This is a container for one-of cases. | getCancellationMethod(): ?string | setCancellationMethod(?string cancellationMethod): void |
| `cancelAtEndOfPeriod` | `?bool` | Optional | Whether or not the subscription will (or has) canceled at the end of the period. | getCancelAtEndOfPeriod(): ?bool | setCancelAtEndOfPeriod(?bool cancelAtEndOfPeriod): void |
| `canceledAt` | `?string` | Optional | The timestamp of the most recent cancellation | getCanceledAt(): ?string | setCanceledAt(?string canceledAt): void |
| `currentPeriodStartedAt` | `?string` | Optional | Timestamp relating to the start of the current (recurring) period | getCurrentPeriodStartedAt(): ?string | setCurrentPeriodStartedAt(?string currentPeriodStartedAt): void |
| `previousState` | `?string` | Optional | Only valid for webhook payloads The previous state for webhooks that have indicated a change in state. For normal API calls, this will always be the same as the state (current state) | getPreviousState(): ?string | setPreviousState(?string previousState): void |
| `signupPaymentId` | `?int` | Optional | The ID of the transaction that generated the revenue | getSignupPaymentId(): ?int | setSignupPaymentId(?int signupPaymentId): void |
| `signupRevenue` | `?string` | Optional | The revenue, formatted as a string of decimal separated dollars and,cents, from the subscription signup ($50.00 would be formatted as,50.00) | getSignupRevenue(): ?string | setSignupRevenue(?string signupRevenue): void |
| `delayedCancelAt` | `?string` | Optional | Timestamp for when the subscription is currently set to cancel. | getDelayedCancelAt(): ?string | setDelayedCancelAt(?string delayedCancelAt): void |
| `couponCode` | `?string` | Optional | (deprecated) The coupon code of the single coupon currently applied to the subscription. See coupon_codes instead as subscriptions can now have more than one coupon. | getCouponCode(): ?string | setCouponCode(?string couponCode): void |
| `snapDay` | `?string` | Optional | The day of the month that the subscription will charge according to calendar billing rules, if used. | getSnapDay(): ?string | setSnapDay(?string snapDay): void |
| `paymentCollectionMethod` | string([PaymentCollectionMethod](../../doc/models/payment-collection-method.md))\|null | Optional | This is a container for one-of cases. | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |
| `customer` | [`?Customer`](../../doc/models/customer.md) | Optional | - | getCustomer(): ?Customer | setCustomer(?Customer customer): void |
| `product` | [`?Product`](../../doc/models/product.md) | Optional | - | getProduct(): ?Product | setProduct(?Product product): void |
| `creditCard` | [`?PaymentProfile`](../../doc/models/payment-profile.md) | Optional | - | getCreditCard(): ?PaymentProfile | setCreditCard(?PaymentProfile creditCard): void |
| `group` | [SubscriptionGroupInlined](../../doc/models/subscription-group-inlined.md)\|null | Optional | This is a container for one-of cases. | getGroup(): ?SubscriptionGroupInlined | setGroup(?SubscriptionGroupInlined group): void |
| `bankAccount` | [`?SubscriptionBankAccount`](../../doc/models/subscription-bank-account.md) | Optional | - | getBankAccount(): ?SubscriptionBankAccount | setBankAccount(?SubscriptionBankAccount bankAccount): void |
| `paymentType` | `?string` | Optional | The payment profile type for the active profile on file. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `referralCode` | `?string` | Optional | The subscription's unique code that can be given to referrals. | getReferralCode(): ?string | setReferralCode(?string referralCode): void |
| `nextProductId` | `?int` | Optional | If a delayed product change is scheduled, the ID of the product that the subscription will be changed to at the next renewal. | getNextProductId(): ?int | setNextProductId(?int nextProductId): void |
| `nextProductHandle` | `?string` | Optional | If a delayed product change is scheduled, the handle of the product that the subscription will be changed to at the next renewal. | getNextProductHandle(): ?string | setNextProductHandle(?string nextProductHandle): void |
| `couponUseCount` | `?int` | Optional | (deprecated) How many times the subscription's single coupon has been used. This field has no replacement for multiple coupons. | getCouponUseCount(): ?int | setCouponUseCount(?int couponUseCount): void |
| `couponUsesAllowed` | `?int` | Optional | (deprecated) How many times the subscription's single coupon may be used. This field has no replacement for multiple coupons. | getCouponUsesAllowed(): ?int | setCouponUsesAllowed(?int couponUsesAllowed): void |
| `reasonCode` | `?string` | Optional | If the subscription is canceled, this is their churn code. | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `automaticallyResumeAt` | `?string` | Optional | The date the subscription is scheduled to automatically resume from the on_hold state. | getAutomaticallyResumeAt(): ?string | setAutomaticallyResumeAt(?string automaticallyResumeAt): void |
| `couponCodes` | `?(string[])` | Optional | An array for all the coupons attached to the subscription. | getCouponCodes(): ?array | setCouponCodes(?array couponCodes): void |
| `offerId` | `?int` | Optional | The ID of the offer associated with the subscription. | getOfferId(): ?int | setOfferId(?int offerId): void |
| `payerId` | `?int` | Optional | On Relationship Invoicing, the ID of the individual paying for the subscription. Defaults to the Customer ID unless the 'Customer Hierarchies & WhoPays' feature is enabled. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `currentBillingAmountInCents` | `?int` | Optional | The balance in cents plus the estimated renewal amount in cents. | getCurrentBillingAmountInCents(): ?int | setCurrentBillingAmountInCents(?int currentBillingAmountInCents): void |
| `productPricePointId` | `?int` | Optional | The product price point currently subscribed to. | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `productPricePointType` | `?string` | Optional | One of the following: custom, default, catalog. | getProductPricePointType(): ?string | setProductPricePointType(?string productPricePointType): void |
| `nextProductPricePointId` | `?int` | Optional | If a delayed product change is scheduled, the ID of the product price point that the subscription will be changed to at the next renewal. | getNextProductPricePointId(): ?int | setNextProductPricePointId(?int nextProductPricePointId): void |
| `netTerms` | `?int` | Optional | On Relationship Invoicing, the number of days before a renewal invoice is due. | getNetTerms(): ?int | setNetTerms(?int netTerms): void |
| `storedCredentialTransactionId` | `?int` | Optional | For European sites subject to PSD2 and using 3D Secure, this can be used to reference a previous transaction for the customer. This will ensure the card will be charged successfully at renewal. | getStoredCredentialTransactionId(): ?int | setStoredCredentialTransactionId(?int storedCredentialTransactionId): void |
| `reference` | `?string` | Optional | The reference value (provided by your app) for the subscription itelf. | getReference(): ?string | setReference(?string reference): void |
| `onHoldAt` | `?string` | Optional | The timestamp of the most recent on hold action. | getOnHoldAt(): ?string | setOnHoldAt(?string onHoldAt): void |
| `prepaidDunning` | `?bool` | Optional | Boolean representing whether the subscription is prepaid and currently in dunning. Only returned for Relationship Invoicing sites with the feature enabled | getPrepaidDunning(): ?bool | setPrepaidDunning(?bool prepaidDunning): void |
| `coupons` | [`?(SubscriptionIncludedCoupon[])`](../../doc/models/subscription-included-coupon.md) | Optional | Additional coupon data. To use this data you also have to include the following param in the request`include[]=coupons`.<br>Only in Read Subscription Endpoint. | getCoupons(): ?array | setCoupons(?array coupons): void |
| `dunningCommunicationDelayEnabled` | `?bool` | Optional | Enable Communication Delay feature, making sure no communication (email or SMS) is sent to the Customer between 9PM and 8AM in time zone set by the `dunning_communication_delay_time_zone` attribute.<br>**Default**: `false` | getDunningCommunicationDelayEnabled(): ?bool | setDunningCommunicationDelayEnabled(?bool dunningCommunicationDelayEnabled): void |
| `dunningCommunicationDelayTimeZone` | `?string` | Optional | Time zone for the Dunning Communication Delay feature. | getDunningCommunicationDelayTimeZone(): ?string | setDunningCommunicationDelayTimeZone(?string dunningCommunicationDelayTimeZone): void |
| `receivesInvoiceEmails` | `?bool` | Optional | - | getReceivesInvoiceEmails(): ?bool | setReceivesInvoiceEmails(?bool receivesInvoiceEmails): void |
| `locale` | `?string` | Optional | - | getLocale(): ?string | setLocale(?string locale): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `scheduledCancellationAt` | `?string` | Optional | - | getScheduledCancellationAt(): ?string | setScheduledCancellationAt(?string scheduledCancellationAt): void |
| `creditBalanceInCents` | `?int` | Optional | - | getCreditBalanceInCents(): ?int | setCreditBalanceInCents(?int creditBalanceInCents): void |
| `prepaymentBalanceInCents` | `?int` | Optional | - | getPrepaymentBalanceInCents(): ?int | setPrepaymentBalanceInCents(?int prepaymentBalanceInCents): void |

## Example (as JSON)

```json
{
  "credit_card": {
    "id": 10088716,
    "first_name": "Test",
    "last_name": "Subscription",
    "masked_card_number": "XXXX-XXXX-XXXX-1",
    "card_type": "bogus",
    "expiration_month": 1,
    "expiration_year": 2022,
    "customer_id": 14543792,
    "current_vault": "bogus",
    "vault_token": "1",
    "billing_address": "123 Montana Way",
    "billing_city": "Billings",
    "billing_state": "MT",
    "billing_zip": "59101",
    "billing_country": "US",
    "customer_vault_token": null,
    "billing_address_2": "",
    "payment_type": "credit_card",
    "site_gateway_setting_id": 1,
    "gateway_handle": null
  },
  "dunning_communication_delay_enabled": false,
  "dunning_communication_delay_time_zone": "\"Eastern Time (US & Canada)\"",
  "id": 96,
  "state": "state0",
  "balance_in_cents": 212,
  "total_revenue_in_cents": 136,
  "product_price_in_cents": 70
}
```

