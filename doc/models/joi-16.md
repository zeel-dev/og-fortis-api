
# Joi 16

## Structure

`Joi16`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `conditions` | [Conditions16](../../doc/models/conditions-16.md)\|[Conditions16](../../doc/models/conditions-16.md)1\|[Conditions4](../../doc/models/conditions-4.md)\|[Conditions4](../../doc/models/conditions-4.md)1\|[Conditions4](../../doc/models/conditions-4.md)2\|[Conditions4](../../doc/models/conditions-4.md)3\|null | Optional | This is a container for any-of cases. | getConditions(): | setConditions( conditions): void |

## Example (as JSON)

```json
{
  "conditions": {
    "method": "xor",
    "values": "account_number"
  }
}
```

