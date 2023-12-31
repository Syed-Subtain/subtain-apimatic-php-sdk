
# Metafield

## Structure

`Metafield`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?float` | Optional | - | getId(): ?float | setId(?float id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `scope` | [`?MetafieldScope`](../../doc/models/metafield-scope.md) | Optional | Warning: When updating a metafield's scope attribute, all scope attributes must be passed. Partially complete scope attributes will override the existing settings. | getScope(): ?MetafieldScope | setScope(?MetafieldScope scope): void |
| `dataCount` | `?int` | Optional | the amount of subscriptions this metafield has been applied to in Chargify | getDataCount(): ?int | setDataCount(?int dataCount): void |
| `inputType` | `?string` | Optional | - | getInputType(): ?string | setInputType(?string inputType): void |
| `enum` | string[][]\|null | Optional | This is Array of a container for one-of cases. | getEnum(): ?array | setEnum(?array enum): void |

## Example (as JSON)

```json
{
  "id": 41.48,
  "name": "name8",
  "scope": {
    "csv": "0",
    "invoices": "0",
    "statements": "0",
    "portal": "0",
    "public_show": "0"
  },
  "data_count": 216,
  "input_type": "input_type0"
}
```

