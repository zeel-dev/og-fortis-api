
# Response Apple Pay Validate Merchant

## Structure

`ResponseApplePayValidateMerchant`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(Type118Enum)`](../../doc/models/type-118-enum.md) | Optional | Resource Type<br>**Default**: `Type118Enum::APPLEPAYVALIDATEMERCHANT` | getType(): ?string | setType(?string type): void |
| `data` | [`?Data33`](../../doc/models/data-33.md) | Optional | - | getData(): ?Data33 | setData(?Data33 data): void |

## Example (as JSON)

```json
{
  "type": "ApplePayValidateMerchant",
  "data": {
    "merchantSession": "merchantSession0"
  }
}
```

