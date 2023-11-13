
# Subscription Group Inlined

## Structure

`SubscriptionGroupInlined`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | The UID for the group | getUid(): ?string | setUid(?string uid): void |
| `scheme` | `?string` | Optional | Whether the group is configured to rely on a primary subscription for billing. At this time, it will always be 1. | getScheme(): ?string | setScheme(?string scheme): void |
| `primarySubscriptionId` | `?string` | Optional | The subscription ID of the primary within the group. Applicable to scheme 1. | getPrimarySubscriptionId(): ?string | setPrimarySubscriptionId(?string primarySubscriptionId): void |
| `primary` | `?bool` | Optional | A boolean indicating whether the subscription is the primary in the group. Applicable to scheme 1. | getPrimary(): ?bool | setPrimary(?bool primary): void |

## Example (as JSON)

```json
{
  "uid": "uid2",
  "scheme": "scheme2",
  "primary_subscription_id": "primary_subscription_id8",
  "primary": false
}
```

