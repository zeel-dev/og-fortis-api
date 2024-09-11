
# Response Tag

## Structure

`ResponseTag`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type69Enum)`](../../doc/models/type-69-enum.md) | Optional | Resource Type<br>**Default**: `Type69Enum::TAG` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data18`](../../doc/models/data-18.md) | Optional | - | getData(): ?Data18 | setData(?Data18 data): void |

## Example (as JSON)

```json
{
  "type": "Tag",
  "data": {
    "location_id": "location_id4",
    "title": "title6",
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190
  }
}
```

