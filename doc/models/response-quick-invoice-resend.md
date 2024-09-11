
# Response Quick Invoice Resend

## Structure

`ResponseQuickInvoiceResend`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type53Enum)`](../../doc/models/type-53-enum.md) | Optional | Resource Type<br>**Default**: `Type53Enum::QUICKINVOICERESEND` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data15`](../../doc/models/data-15.md) | Optional | - | getData(): ?Data15 | setData(?Data15 data): void |

## Example (as JSON)

```json
{
  "type": "QuickInvoiceResend",
  "data": {
    "id": "id0",
    "email_log_id": "email_log_id2",
    "sms_log_id": "sms_log_id4",
    "success": false,
    "sms_success": false
  }
}
```

