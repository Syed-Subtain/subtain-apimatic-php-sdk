
# Create or Update Product

## Structure

`CreateOrUpdateProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `string` | Required | - | getDescription(): string | setDescription(string description): void |
| `accountingCode` | `?string` | Optional | - | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `requireCreditCard` | `?bool` | Optional | - | getRequireCreditCard(): ?bool | setRequireCreditCard(?bool requireCreditCard): void |
| `priceInCents` | `int` | Required | - | getPriceInCents(): int | setPriceInCents(int priceInCents): void |
| `interval` | `int` | Required | - | getInterval(): int | setInterval(int interval): void |
| `intervalUnit` | `string` | Required | - | getIntervalUnit(): string | setIntervalUnit(string intervalUnit): void |
| `autoCreateSignupPage` | `?bool` | Optional | - | getAutoCreateSignupPage(): ?bool | setAutoCreateSignupPage(?bool autoCreateSignupPage): void |
| `taxCode` | `?string` | Optional | - | getTaxCode(): ?string | setTaxCode(?string taxCode): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "handle": "handle4",
  "description": "description8",
  "accounting_code": "accounting_code4",
  "require_credit_card": false,
  "price_in_cents": 190,
  "interval": 174,
  "interval_unit": "interval_unit8",
  "auto_create_signup_page": false,
  "tax_code": "tax_code6"
}
```

