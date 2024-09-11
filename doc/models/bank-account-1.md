
# Bank Account 1

Array of bank account objects.

## Structure

`BankAccount1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountHolderName` | `string` | Required | Account holder name.<br>**Constraints**: *Maximum Length*: `40` | getAccountHolderName(): string | setAccountHolderName(string accountHolderName): void |
| `routingNumber` | `string` | Required | Nine-digit Bank routing number.<br>**Constraints**: *Maximum Length*: `9` | getRoutingNumber(): string | setRoutingNumber(string routingNumber): void |
| `accountNumber` | `string` | Required | Account number.<br>**Constraints**: *Maximum Length*: `17` | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `isPrimary` | `?bool` | Optional | Flag indicating whether or not the account is the primary account. Only one account can be marked as primary. | getIsPrimary(): ?bool | setIsPrimary(?bool isPrimary): void |
| `accountType` | [`string(AccountType6Enum)`](../../doc/models/account-type-6-enum.md) | Required | Account type. Either "checking" or "savings"<br>**Constraints**: *Maximum Length*: `10` | getAccountType(): string | setAccountType(string accountType): void |
| `altDepositTypes` | `?(string[])` | Optional | Array of deposit types. ('fees', 'adjustments', 'returns') | getAltDepositTypes(): ?array | setAltDepositTypes(?array altDepositTypes): void |

## Example (as JSON)

```json
{
  "account_holder_name": "James Bond",
  "routing_number": "111111111",
  "account_number": "1234567",
  "is_primary": true,
  "account_type": "checking",
  "alt_deposit_types": [
    "alt_deposit_types0",
    "alt_deposit_types9"
  ]
}
```

