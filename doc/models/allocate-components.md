
# Allocate Components

## Structure

`AllocateComponents`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `prorationUpgradeScheme` | `?string` | Optional | **Default**: `'no-prorate'` | getProrationUpgradeScheme(): ?string | setProrationUpgradeScheme(?string prorationUpgradeScheme): void |
| `prorationDowngradeScheme` | `?string` | Optional | **Default**: `'no-prorate'` | getProrationDowngradeScheme(): ?string | setProrationDowngradeScheme(?string prorationDowngradeScheme): void |
| `allocations` | [`?(CreateAllocationRequest[])`](../../doc/models/create-allocation-request.md) | Optional | - | getAllocations(): ?array | setAllocations(?array allocations): void |
| `accrueCharge` | `?bool` | Optional | - | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |
| `upgradeCharge` | `?string` | Optional | - | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | `?string` | Optional | - | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `paymentCollectionMethod` | [`?string(PaymentCollectionMethod1)`](../../doc/models/payment-collection-method-1.md) | Optional | (Optional) If not passed, the allocation(s) will use the payment collection method on the subscription<br>**Default**: `PaymentCollectionMethod1::AUTOMATIC` | getPaymentCollectionMethod(): ?string | setPaymentCollectionMethod(?string paymentCollectionMethod): void |

## Example (as JSON)

```json
{
  "proration_upgrade_scheme": "no-prorate",
  "proration_downgrade_scheme": "no-prorate",
  "payment_collection_method": "automatic",
  "allocations": [
    {
      "allocation": {
        "quantity": 228.94,
        "component_id": 8,
        "memo": "memo2",
        "proration_downgrade_scheme": "proration_downgrade_scheme4",
        "proration_upgrade_scheme": "proration_upgrade_scheme6",
        "accrue_charge": false
      }
    },
    {
      "allocation": {
        "quantity": 228.94,
        "component_id": 8,
        "memo": "memo2",
        "proration_downgrade_scheme": "proration_downgrade_scheme4",
        "proration_upgrade_scheme": "proration_upgrade_scheme6",
        "accrue_charge": false
      }
    }
  ],
  "accrue_charge": false,
  "upgrade_charge": "upgrade_charge4"
}
```

