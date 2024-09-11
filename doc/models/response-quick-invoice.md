
# Response Quick Invoice

## Structure

`ResponseQuickInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type51Enum)`](../../doc/models/type-51-enum.md) | Optional | Resource Type<br>**Default**: `Type51Enum::QUICKINVOICE` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data14`](../../doc/models/data-14.md) | Optional | - | getData(): ?Data14 | setData(?Data14 data): void |

## Example (as JSON)

```json
{
  "type": "QuickInvoice",
  "data": {
    "location_id": "location_id4",
    "title": "title6",
    "cc_product_transaction_id": "cc_product_transaction_id2",
    "ach_product_transaction_id": "ach_product_transaction_id2",
    "due_date": "due_date8"
  }
}
```

