<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

/**
 * Level 3 data object
 */
class Level3Data implements \JsonSerializable
{
    /**
     * @var array
     */
    private $destinationCountryCode = [];

    /**
     * @var array
     */
    private $dutyAmount = [];

    /**
     * @var array
     */
    private $freightAmount = [];

    /**
     * @var array
     */
    private $nationalTax = [];

    /**
     * @var array
     */
    private $salesTax = [];

    /**
     * @var array
     */
    private $shipfromZipCode = [];

    /**
     * @var array
     */
    private $shiptoZipCode = [];

    /**
     * @var array
     */
    private $taxAmount = [];

    /**
     * @var array
     */
    private $taxExempt = [];

    /**
     * @var array
     */
    private $customerVatRegistration = [];

    /**
     * @var array
     */
    private $merchantVatRegistration = [];

    /**
     * @var array
     */
    private $orderDate = [];

    /**
     * @var array
     */
    private $summaryCommodityCode = [];

    /**
     * @var array
     */
    private $taxRate = [];

    /**
     * @var array
     */
    private $uniqueVatRefNumber = [];

    /**
     * @var LineItem[]|null
     */
    private $lineItems;

    /**
     * Returns Destination Country Code.
     * Code of the country where the goods are being shipped.
     */
    public function getDestinationCountryCode(): ?string
    {
        if (count($this->destinationCountryCode) == 0) {
            return null;
        }
        return $this->destinationCountryCode['value'];
    }

    /**
     * Sets Destination Country Code.
     * Code of the country where the goods are being shipped.
     *
     * @maps destination_country_code
     */
    public function setDestinationCountryCode(?string $destinationCountryCode): void
    {
        $this->destinationCountryCode['value'] = $destinationCountryCode;
    }

    /**
     * Unsets Destination Country Code.
     * Code of the country where the goods are being shipped.
     */
    public function unsetDestinationCountryCode(): void
    {
        $this->destinationCountryCode = [];
    }

    /**
     * Returns Duty Amount.
     * Fee amount associated with the import of the purchased goods ,Can accept Two (2) decimal places
     */
    public function getDutyAmount(): ?int
    {
        if (count($this->dutyAmount) == 0) {
            return null;
        }
        return $this->dutyAmount['value'];
    }

    /**
     * Sets Duty Amount.
     * Fee amount associated with the import of the purchased goods ,Can accept Two (2) decimal places
     *
     * @maps duty_amount
     */
    public function setDutyAmount(?int $dutyAmount): void
    {
        $this->dutyAmount['value'] = $dutyAmount;
    }

    /**
     * Unsets Duty Amount.
     * Fee amount associated with the import of the purchased goods ,Can accept Two (2) decimal places
     */
    public function unsetDutyAmount(): void
    {
        $this->dutyAmount = [];
    }

    /**
     * Returns Freight Amount.
     * Freight or shipping portion of the total transaction amount ,Can accept Two (2) decimal places.
     */
    public function getFreightAmount(): ?int
    {
        if (count($this->freightAmount) == 0) {
            return null;
        }
        return $this->freightAmount['value'];
    }

    /**
     * Sets Freight Amount.
     * Freight or shipping portion of the total transaction amount ,Can accept Two (2) decimal places.
     *
     * @maps freight_amount
     */
    public function setFreightAmount(?int $freightAmount): void
    {
        $this->freightAmount['value'] = $freightAmount;
    }

    /**
     * Unsets Freight Amount.
     * Freight or shipping portion of the total transaction amount ,Can accept Two (2) decimal places.
     */
    public function unsetFreightAmount(): void
    {
        $this->freightAmount = [];
    }

    /**
     * Returns National Tax.
     * National tax for the transaction ,Can accept Two (2) decimal places.
     */
    public function getNationalTax(): ?int
    {
        if (count($this->nationalTax) == 0) {
            return null;
        }
        return $this->nationalTax['value'];
    }

    /**
     * Sets National Tax.
     * National tax for the transaction ,Can accept Two (2) decimal places.
     *
     * @maps national_tax
     */
    public function setNationalTax(?int $nationalTax): void
    {
        $this->nationalTax['value'] = $nationalTax;
    }

    /**
     * Unsets National Tax.
     * National tax for the transaction ,Can accept Two (2) decimal places.
     */
    public function unsetNationalTax(): void
    {
        $this->nationalTax = [];
    }

    /**
     * Returns Sales Tax.
     * Sales tax for the transaction ,Can accept Two (2) decimal places.
     */
    public function getSalesTax(): ?int
    {
        if (count($this->salesTax) == 0) {
            return null;
        }
        return $this->salesTax['value'];
    }

    /**
     * Sets Sales Tax.
     * Sales tax for the transaction ,Can accept Two (2) decimal places.
     *
     * @maps sales_tax
     */
    public function setSalesTax(?int $salesTax): void
    {
        $this->salesTax['value'] = $salesTax;
    }

    /**
     * Unsets Sales Tax.
     * Sales tax for the transaction ,Can accept Two (2) decimal places.
     */
    public function unsetSalesTax(): void
    {
        $this->salesTax = [];
    }

    /**
     * Returns Shipfrom Zip Code.
     * Postal/ZIP code of the address from where the purchased goods are being shipped.
     */
    public function getShipfromZipCode(): ?string
    {
        if (count($this->shipfromZipCode) == 0) {
            return null;
        }
        return $this->shipfromZipCode['value'];
    }

    /**
     * Sets Shipfrom Zip Code.
     * Postal/ZIP code of the address from where the purchased goods are being shipped.
     *
     * @maps shipfrom_zip_code
     */
    public function setShipfromZipCode(?string $shipfromZipCode): void
    {
        $this->shipfromZipCode['value'] = $shipfromZipCode;
    }

    /**
     * Unsets Shipfrom Zip Code.
     * Postal/ZIP code of the address from where the purchased goods are being shipped.
     */
    public function unsetShipfromZipCode(): void
    {
        $this->shipfromZipCode = [];
    }

    /**
     * Returns Shipto Zip Code.
     * Postal/ZIP code of the address where purchased goods will be delivered.
     */
    public function getShiptoZipCode(): ?string
    {
        if (count($this->shiptoZipCode) == 0) {
            return null;
        }
        return $this->shiptoZipCode['value'];
    }

    /**
     * Sets Shipto Zip Code.
     * Postal/ZIP code of the address where purchased goods will be delivered.
     *
     * @maps shipto_zip_code
     */
    public function setShiptoZipCode(?string $shiptoZipCode): void
    {
        $this->shiptoZipCode['value'] = $shiptoZipCode;
    }

    /**
     * Unsets Shipto Zip Code.
     * Postal/ZIP code of the address where purchased goods will be delivered.
     */
    public function unsetShiptoZipCode(): void
    {
        $this->shiptoZipCode = [];
    }

    /**
     * Returns Tax Amount.
     * Amount of any value added taxes ,Can accept Two (2) decimal places.
     */
    public function getTaxAmount(): ?int
    {
        if (count($this->taxAmount) == 0) {
            return null;
        }
        return $this->taxAmount['value'];
    }

    /**
     * Sets Tax Amount.
     * Amount of any value added taxes ,Can accept Two (2) decimal places.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?int $taxAmount): void
    {
        $this->taxAmount['value'] = $taxAmount;
    }

    /**
     * Unsets Tax Amount.
     * Amount of any value added taxes ,Can accept Two (2) decimal places.
     */
    public function unsetTaxAmount(): void
    {
        $this->taxAmount = [];
    }

    /**
     * Returns Tax Exempt.
     * Sales Tax Exempt. Allowed values: “1”, “0”.
     */
    public function getTaxExempt(): ?string
    {
        if (count($this->taxExempt) == 0) {
            return null;
        }
        return $this->taxExempt['value'];
    }

    /**
     * Sets Tax Exempt.
     * Sales Tax Exempt. Allowed values: “1”, “0”.
     *
     * @maps tax_exempt
     * @factory \FortisAPILib\Models\TaxExemptEnum::checkValue
     */
    public function setTaxExempt(?string $taxExempt): void
    {
        $this->taxExempt['value'] = $taxExempt;
    }

    /**
     * Unsets Tax Exempt.
     * Sales Tax Exempt. Allowed values: “1”, “0”.
     */
    public function unsetTaxExempt(): void
    {
        $this->taxExempt = [];
    }

    /**
     * Returns Customer Vat Registration.
     * Customer VAT Registration
     */
    public function getCustomerVatRegistration(): ?string
    {
        if (count($this->customerVatRegistration) == 0) {
            return null;
        }
        return $this->customerVatRegistration['value'];
    }

    /**
     * Sets Customer Vat Registration.
     * Customer VAT Registration
     *
     * @maps customer_vat_registration
     */
    public function setCustomerVatRegistration(?string $customerVatRegistration): void
    {
        $this->customerVatRegistration['value'] = $customerVatRegistration;
    }

    /**
     * Unsets Customer Vat Registration.
     * Customer VAT Registration
     */
    public function unsetCustomerVatRegistration(): void
    {
        $this->customerVatRegistration = [];
    }

    /**
     * Returns Merchant Vat Registration.
     * Merchant VAT Registration
     */
    public function getMerchantVatRegistration(): ?string
    {
        if (count($this->merchantVatRegistration) == 0) {
            return null;
        }
        return $this->merchantVatRegistration['value'];
    }

    /**
     * Sets Merchant Vat Registration.
     * Merchant VAT Registration
     *
     * @maps merchant_vat_registration
     */
    public function setMerchantVatRegistration(?string $merchantVatRegistration): void
    {
        $this->merchantVatRegistration['value'] = $merchantVatRegistration;
    }

    /**
     * Unsets Merchant Vat Registration.
     * Merchant VAT Registration
     */
    public function unsetMerchantVatRegistration(): void
    {
        $this->merchantVatRegistration = [];
    }

    /**
     * Returns Order Date.
     * Order Date
     */
    public function getOrderDate(): ?string
    {
        if (count($this->orderDate) == 0) {
            return null;
        }
        return $this->orderDate['value'];
    }

    /**
     * Sets Order Date.
     * Order Date
     *
     * @maps order_date
     */
    public function setOrderDate(?string $orderDate): void
    {
        $this->orderDate['value'] = $orderDate;
    }

    /**
     * Unsets Order Date.
     * Order Date
     */
    public function unsetOrderDate(): void
    {
        $this->orderDate = [];
    }

    /**
     * Returns Summary Commodity Code.
     * Summary Commodity Code
     */
    public function getSummaryCommodityCode(): ?string
    {
        if (count($this->summaryCommodityCode) == 0) {
            return null;
        }
        return $this->summaryCommodityCode['value'];
    }

    /**
     * Sets Summary Commodity Code.
     * Summary Commodity Code
     *
     * @maps summary_commodity_code
     */
    public function setSummaryCommodityCode(?string $summaryCommodityCode): void
    {
        $this->summaryCommodityCode['value'] = $summaryCommodityCode;
    }

    /**
     * Unsets Summary Commodity Code.
     * Summary Commodity Code
     */
    public function unsetSummaryCommodityCode(): void
    {
        $this->summaryCommodityCode = [];
    }

    /**
     * Returns Tax Rate.
     * Tax rate used to calculate the sales tax amount, can accept 2 decimal places.
     */
    public function getTaxRate(): ?int
    {
        if (count($this->taxRate) == 0) {
            return null;
        }
        return $this->taxRate['value'];
    }

    /**
     * Sets Tax Rate.
     * Tax rate used to calculate the sales tax amount, can accept 2 decimal places.
     *
     * @maps tax_rate
     */
    public function setTaxRate(?int $taxRate): void
    {
        $this->taxRate['value'] = $taxRate;
    }

    /**
     * Unsets Tax Rate.
     * Tax rate used to calculate the sales tax amount, can accept 2 decimal places.
     */
    public function unsetTaxRate(): void
    {
        $this->taxRate = [];
    }

    /**
     * Returns Unique Vat Ref Number.
     * Unique VAT Reference Number
     */
    public function getUniqueVatRefNumber(): ?string
    {
        if (count($this->uniqueVatRefNumber) == 0) {
            return null;
        }
        return $this->uniqueVatRefNumber['value'];
    }

    /**
     * Sets Unique Vat Ref Number.
     * Unique VAT Reference Number
     *
     * @maps unique_vat_ref_number
     */
    public function setUniqueVatRefNumber(?string $uniqueVatRefNumber): void
    {
        $this->uniqueVatRefNumber['value'] = $uniqueVatRefNumber;
    }

    /**
     * Unsets Unique Vat Ref Number.
     * Unique VAT Reference Number
     */
    public function unsetUniqueVatRefNumber(): void
    {
        $this->uniqueVatRefNumber = [];
    }

    /**
     * Returns Line Items.
     * Array of line items in transaction
     *
     * @return LineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     * Array of line items in transaction
     *
     * @maps line_items
     *
     * @param LineItem[]|null $lineItems
     */
    public function setLineItems(?array $lineItems): void
    {
        $this->lineItems = $lineItems;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->destinationCountryCode)) {
            $json['destination_country_code']  = $this->destinationCountryCode['value'];
        }
        if (!empty($this->dutyAmount)) {
            $json['duty_amount']               = $this->dutyAmount['value'];
        }
        if (!empty($this->freightAmount)) {
            $json['freight_amount']            = $this->freightAmount['value'];
        }
        if (!empty($this->nationalTax)) {
            $json['national_tax']              = $this->nationalTax['value'];
        }
        if (!empty($this->salesTax)) {
            $json['sales_tax']                 = $this->salesTax['value'];
        }
        if (!empty($this->shipfromZipCode)) {
            $json['shipfrom_zip_code']         = $this->shipfromZipCode['value'];
        }
        if (!empty($this->shiptoZipCode)) {
            $json['shipto_zip_code']           = $this->shiptoZipCode['value'];
        }
        if (!empty($this->taxAmount)) {
            $json['tax_amount']                = $this->taxAmount['value'];
        }
        if (!empty($this->taxExempt)) {
            $json['tax_exempt']                = TaxExemptEnum::checkValue($this->taxExempt['value']);
        }
        if (!empty($this->customerVatRegistration)) {
            $json['customer_vat_registration'] = $this->customerVatRegistration['value'];
        }
        if (!empty($this->merchantVatRegistration)) {
            $json['merchant_vat_registration'] = $this->merchantVatRegistration['value'];
        }
        if (!empty($this->orderDate)) {
            $json['order_date']                = $this->orderDate['value'];
        }
        if (!empty($this->summaryCommodityCode)) {
            $json['summary_commodity_code']    = $this->summaryCommodityCode['value'];
        }
        if (!empty($this->taxRate)) {
            $json['tax_rate']                  = $this->taxRate['value'];
        }
        if (!empty($this->uniqueVatRefNumber)) {
            $json['unique_vat_ref_number']     = $this->uniqueVatRefNumber['value'];
        }
        if (isset($this->lineItems)) {
            $json['line_items']                = $this->lineItems;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
