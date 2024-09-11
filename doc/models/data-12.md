
# Data 12

## Structure

`Data12`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `parentId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getParentId(): ?string | setParentId(?string parentId): void |
| `primaryPrincipal` | [`?PrimaryPrincipal`](../../doc/models/primary-principal.md) | Optional | The Primary Principal. | getPrimaryPrincipal(): ?PrimaryPrincipal | setPrimaryPrincipal(?PrimaryPrincipal primaryPrincipal): void |
| `templateCode` | `?string` | Optional | The ID of the template to be used - this value will be provided by Fortis.<br>**Constraints**: *Maximum Length*: `20`, *Pattern*: `^[a-zA-Z0-9]*$` | getTemplateCode(): ?string | setTemplateCode(?string templateCode): void |
| `email` | `?string` | Optional | Merchant email address.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): ?string | setEmail(?string email): void |
| `dbaName` | `?string` | Optional | Merchant 'Doing Business As' name.<br>**Constraints**: *Maximum Length*: `100` | getDbaName(): ?string | setDbaName(?string dbaName): void |
| `location` | [`?Location5`](../../doc/models/location-5.md) | Optional | The Location. | getLocation(): ?Location5 | setLocation(?Location5 location): void |
| `appDelivery` | `?string` | Optional | The delivery method of the app to the merchant.<br>**Constraints**: *Maximum Length*: `20` | getAppDelivery(): ?string | setAppDelivery(?string appDelivery): void |
| `businessCategory` | [`?string(BusinessCategoryEnum)`](../../doc/models/business-category-enum.md) | Optional | The Category of the merchant's business | getBusinessCategory(): ?string | setBusinessCategory(?string businessCategory): void |
| `businessType` | [`?string(BusinessTypeEnum)`](../../doc/models/business-type-enum.md) | Optional | The Type of a merchant's business. | getBusinessType(): ?string | setBusinessType(?string businessType): void |
| `businessDescription` | `?string` | Optional | Description of Goods or Services.<br>**Constraints**: *Maximum Length*: `200` | getBusinessDescription(): ?string | setBusinessDescription(?string businessDescription): void |
| `swipedPercent` | `?int` | Optional | Card present/swiped percentage<br>**Constraints**: `>= 0`, `<= 100` | getSwipedPercent(): ?int | setSwipedPercent(?int swipedPercent): void |
| `keyedPercent` | `?int` | Optional | Card not present/keyed percentage<br>**Constraints**: `>= 0`, `<= 100` | getKeyedPercent(): ?int | setKeyedPercent(?int keyedPercent): void |
| `ecommercePercent` | `?int` | Optional | eCommerce percentage.<br>**Constraints**: `>= 0`, `<= 100` | getEcommercePercent(): ?int | setEcommercePercent(?int ecommercePercent): void |
| `ownershipType` | [`?string(OwnershipTypeEnum)`](../../doc/models/ownership-type-enum.md) | Optional | The Ownership Type of the merchant's business.<br>**Constraints**: *Maximum Length*: `10` | getOwnershipType(): ?string | setOwnershipType(?string ownershipType): void |
| `fedTaxId` | `?string` | Optional | Federal Tax ID (EIN).<br>**Constraints**: *Maximum Length*: `10` | getFedTaxId(): ?string | setFedTaxId(?string fedTaxId): void |
| `ccAverageTicketRange` | `?int` | Optional | Average Transaction Amount Range<br>**Constraints**: `>= 1`, `<= 7` | getCcAverageTicketRange(): ?int | setCcAverageTicketRange(?int ccAverageTicketRange): void |
| `ccMonthlyVolumeRange` | `?int` | Optional | Monthly Processing Volume Range<br>**Constraints**: `>= 1`, `<= 7` | getCcMonthlyVolumeRange(): ?int | setCcMonthlyVolumeRange(?int ccMonthlyVolumeRange): void |
| `ccHighTicket` | `?int` | Optional | Highest transaction amount rounded to the next dollar<br>**Constraints**: `>= 0`, `<= 30000` | getCcHighTicket(): ?int | setCcHighTicket(?int ccHighTicket): void |
| `ecAverageTicketRange` | `?int` | Optional | Average Transaction Amount Range<br>**Constraints**: `>= 1`, `<= 7` | getEcAverageTicketRange(): ?int | setEcAverageTicketRange(?int ecAverageTicketRange): void |
| `ecMonthlyVolumeRange` | `?int` | Optional | Monthly Processing Volume Range<br>**Constraints**: `>= 1`, `<= 7` | getEcMonthlyVolumeRange(): ?int | setEcMonthlyVolumeRange(?int ecMonthlyVolumeRange): void |
| `ecHighTicket` | `?int` | Optional | Highest transaction amount rounded to the next dollar<br>**Constraints**: `>= 0`, `<= 30000` | getEcHighTicket(): ?int | setEcHighTicket(?int ecHighTicket): void |
| `website` | `?string` | Optional | Merchant's business website.<br>**Constraints**: *Maximum Length*: `100` | getWebsite(): ?string | setWebsite(?string website): void |
| `bankAccount` | [`?BankAccount`](../../doc/models/bank-account.md) | Optional | The Bank Account. | getBankAccount(): ?BankAccount | setBankAccount(?BankAccount bankAccount): void |
| `altBankAccount` | [`?AltBankAccount`](../../doc/models/alt-bank-account.md) | Optional | The Alternative Bank Account. | getAltBankAccount(): ?AltBankAccount | setAltBankAccount(?AltBankAccount altBankAccount): void |
| `legalName` | `?string` | Optional | Merchant legal name.<br>**Constraints**: *Maximum Length*: `100` | getLegalName(): ?string | setLegalName(?string legalName): void |
| `contact` | [`?Contact`](../../doc/models/contact.md) | Optional | The Contact. | getContact(): ?Contact | setContact(?Contact contact): void |
| `clientAppId` | `?string` | Optional | Client Issues Id to track that can be used to track each submitted merchant application. This id should be generated and sent in the request payload, and will be returned in the response payload. If no id is submitted in the payload request, this field will be null in the response.<br>**Constraints**: *Maximum Length*: `20` | getClientAppId(): ?string | setClientAppId(?string clientAppId): void |
| `appLink` | `?string` | Optional | A full page or iframeable link, set in the request app_delivery field, that can be used to retrieve and resume the generated merchant application. No link will be returned if app_delivery is direct<br>**Constraints**: *Maximum Length*: `400` | getAppLink(): ?string | setAppLink(?string appLink): void |

## Example (as JSON)

```json
{
  "parent_id": "11e95f8ec39de8fbdb0a4f1a",
  "template_code": "1234YourTemplateCode",
  "email": "jtodd@example.com",
  "dba_name": "Discount Home Goods",
  "app_delivery": "link_full_page",
  "business_category": "education",
  "swiped_percent": 0,
  "keyed_percent": 0,
  "ecommerce_percent": 100,
  "ownership_type": "llp",
  "fed_tax_id": "0000000000",
  "cc_average_ticket_range": 5,
  "cc_monthly_volume_range": 1,
  "cc_high_ticket": 1500,
  "ec_average_ticket_range": 5,
  "ec_monthly_volume_range": 2,
  "ec_high_ticket": 1500,
  "website": "http://www.example.com",
  "legal_name": "Total Home Goods, LLP",
  "client_app_id": "ABC123",
  "app_link": "https://mpa.example.com/signup/123456788",
  "primary_principal": {
    "first_name": "first_name6",
    "last_name": "last_name4",
    "middle_name": "middle_name6",
    "title": "title2",
    "date_of_birth": "date_of_birth2"
  }
}
```

