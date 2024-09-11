
# Response Transaction Level 3 Visa

## Structure

`ResponseTransactionLevel3Visa`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type96Enum)`](../../doc/models/type-96-enum.md) | Optional | Resource Type<br>**Default**: `Type96Enum::TRANSACTIONLEVEL3VISA` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data24`](../../doc/models/data-24.md) | Optional | - | getData(): ?Data24 | setData(?Data24 data): void |

## Example (as JSON)

```json
{
  "type": "TransactionLevel3Visa",
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

