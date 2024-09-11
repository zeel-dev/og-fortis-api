
# Response Recurring

## Structure

`ResponseRecurring`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type59Enum)`](../../doc/models/type-59-enum.md) | Optional | Resource Type<br>**Default**: `Type59Enum::RECURRING` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data16`](../../doc/models/data-16.md) | Optional | - | getData(): ?Data16 | setData(?Data16 data): void |

## Example (as JSON)

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "account_vault_id6",
    "token_id": "token_id4",
    "contact_id": "contact_id4",
    "account_vault_api_id": "account_vault_api_id4",
    "token_api_id": "token_api_id6"
  }
}
```

