
# Proforma Custom Field

## Structure

`ProformaCustomField`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ownerId` | `?float` | Optional | - | getOwnerId(): ?float | setOwnerId(?float ownerId): void |
| `ownerType` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getOwnerType(): ?string | setOwnerType(?string ownerType): void |
| `name` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | **Constraints**: *Minimum Length*: `1` | getValue(): ?string | setValue(?string value): void |
| `metadatumId` | `?float` | Optional | - | getMetadatumId(): ?float | setMetadatumId(?float metadatumId): void |

## Example (as JSON)

```json
{
  "owner_id": 86.72,
  "owner_type": "owner_type0",
  "name": "name8",
  "value": "value0",
  "metadatum_id": 32.96
}
```

