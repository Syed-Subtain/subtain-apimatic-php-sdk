
# Allocation Settings

## Structure

`AllocationSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `upgradeCharge` | `?string` | Optional | - | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | `?string` | Optional | - | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `accrueCharge` | `?bool` | Optional | - | getAccrueCharge(): ?bool | setAccrueCharge(?bool accrueCharge): void |

## Example (as JSON)

```json
{
  "upgrade_charge": "upgrade_charge6",
  "downgrade_credit": "downgrade_credit4",
  "accrue_charge": false
}
```

