
# Response Signature

## Structure

`ResponseSignature`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type64Enum)`](../../doc/models/type-64-enum.md) | Optional | Resource Type<br>**Default**: `Type64Enum::SIGNATURE` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data17`](../../doc/models/data-17.md) | Optional | - | getData(): ?Data17 | setData(?Data17 data): void |

## Example (as JSON)

```json
{
  "type": "Signature",
  "data": {
    "signature": "signature8",
    "resource": "AccountVault",
    "resource_id": "resource_id6",
    "id": "id0",
    "created_ts": 114
  }
}
```

