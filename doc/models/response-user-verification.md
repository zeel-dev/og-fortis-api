
# Response User Verification

## Structure

`ResponseUserVerification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type104Enum)`](../../doc/models/type-104-enum.md) | Optional | Resource Type<br>**Default**: `Type104Enum::USERVERIFICATION` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data27`](../../doc/models/data-27.md) | Optional | - | getData(): ?Data27 | setData(?Data27 data): void |

## Example (as JSON)

```json
{
  "type": "UserVerification",
  "data": {
    "id": "id0",
    "user_id": "user_id8",
    "hash": "hash6",
    "created_ts": 114
  }
}
```

