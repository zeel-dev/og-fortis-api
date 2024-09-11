
# Response Transaction Level 3

## Structure

`ResponseTransactionLevel3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type97Enum)`](../../doc/models/type-97-enum.md) | Optional | Resource Type<br>**Default**: `Type97Enum::TRANSACTIONLEVEL3` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data24`](../../doc/models/data-24.md) | Optional | - | getData(): ?Data24 | setData(?Data24 data): void |

## Example (as JSON)

```json
{
  "type": "TransactionLevel3",
  "data": {
    "id": "id0",
    "transaction_id": "transaction_id8",
    "level3_data": {
      "destination_country_code": "destination_country_code4",
      "duty_amount": 182,
      "freight_amount": 60,
      "national_tax": 50,
      "sales_tax": 222
    }
  }
}
```

