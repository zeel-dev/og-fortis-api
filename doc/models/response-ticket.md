
# Response Ticket

## Structure

`ResponseTicket`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type79Enum)`](../../doc/models/type-79-enum.md) | Optional | Resource Type<br>**Default**: `Type79Enum::TICKET` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data20`](../../doc/models/data-20.md) | Optional | - | getData(): ?Data20 | setData(?Data20 data): void |

## Example (as JSON)

```json
{
  "type": "Ticket",
  "data": {
    "account_holder_name": "account_holder_name0",
    "exp_date": "exp_date8",
    "cvv": "cvv8",
    "account_number": "account_number0",
    "billing_address": {
      "postal_code": "postal_code0",
      "street": "street8"
    }
  }
}
```

