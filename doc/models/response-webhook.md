
# Response Webhook

## Structure

`ResponseWebhook`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type119Enum)`](../../doc/models/type-119-enum.md) | Optional | Resource Type<br>**Default**: `Type119Enum::WEBHOOK` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data34`](../../doc/models/data-34.md) | Optional | - | getData(): ?Data34 | setData(?Data34 data): void |

## Example (as JSON)

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 14,
    "basic_auth_username": "basic_auth_username8",
    "basic_auth_password": "basic_auth_password0",
    "expands": "expands2",
    "format": "api-default"
  }
}
```

