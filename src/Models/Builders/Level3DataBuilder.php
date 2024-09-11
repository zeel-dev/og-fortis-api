<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Level3Data;

/**
 * Builder for model Level3Data
 *
 * @see Level3Data
 */
class Level3DataBuilder
{
    /**
     * @var Level3Data
     */
    private $instance;

    private function __construct(Level3Data $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new level 3 data Builder object.
     */
    public static function init(): self
    {
        return new self(new Level3Data());
    }

    /**
     * Sets destination country code field.
     */
    public function destinationCountryCode(?string $value): self
    {
        $this->instance->setDestinationCountryCode($value);
        return $this;
    }

    /**
     * Unsets destination country code field.
     */
    public function unsetDestinationCountryCode(): self
    {
        $this->instance->unsetDestinationCountryCode();
        return $this;
    }

    /**
     * Sets duty amount field.
     */
    public function dutyAmount(?int $value): self
    {
        $this->instance->setDutyAmount($value);
        return $this;
    }

    /**
     * Unsets duty amount field.
     */
    public function unsetDutyAmount(): self
    {
        $this->instance->unsetDutyAmount();
        return $this;
    }

    /**
     * Sets freight amount field.
     */
    public function freightAmount(?int $value): self
    {
        $this->instance->setFreightAmount($value);
        return $this;
    }

    /**
     * Unsets freight amount field.
     */
    public function unsetFreightAmount(): self
    {
        $this->instance->unsetFreightAmount();
        return $this;
    }

    /**
     * Sets national tax field.
     */
    public function nationalTax(?int $value): self
    {
        $this->instance->setNationalTax($value);
        return $this;
    }

    /**
     * Unsets national tax field.
     */
    public function unsetNationalTax(): self
    {
        $this->instance->unsetNationalTax();
        return $this;
    }

    /**
     * Sets sales tax field.
     */
    public function salesTax(?int $value): self
    {
        $this->instance->setSalesTax($value);
        return $this;
    }

    /**
     * Unsets sales tax field.
     */
    public function unsetSalesTax(): self
    {
        $this->instance->unsetSalesTax();
        return $this;
    }

    /**
     * Sets shipfrom zip code field.
     */
    public function shipfromZipCode(?string $value): self
    {
        $this->instance->setShipfromZipCode($value);
        return $this;
    }

    /**
     * Unsets shipfrom zip code field.
     */
    public function unsetShipfromZipCode(): self
    {
        $this->instance->unsetShipfromZipCode();
        return $this;
    }

    /**
     * Sets shipto zip code field.
     */
    public function shiptoZipCode(?string $value): self
    {
        $this->instance->setShiptoZipCode($value);
        return $this;
    }

    /**
     * Unsets shipto zip code field.
     */
    public function unsetShiptoZipCode(): self
    {
        $this->instance->unsetShiptoZipCode();
        return $this;
    }

    /**
     * Sets tax amount field.
     */
    public function taxAmount(?int $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Unsets tax amount field.
     */
    public function unsetTaxAmount(): self
    {
        $this->instance->unsetTaxAmount();
        return $this;
    }

    /**
     * Sets tax exempt field.
     */
    public function taxExempt(?string $value): self
    {
        $this->instance->setTaxExempt($value);
        return $this;
    }

    /**
     * Unsets tax exempt field.
     */
    public function unsetTaxExempt(): self
    {
        $this->instance->unsetTaxExempt();
        return $this;
    }

    /**
     * Sets customer vat registration field.
     */
    public function customerVatRegistration(?string $value): self
    {
        $this->instance->setCustomerVatRegistration($value);
        return $this;
    }

    /**
     * Unsets customer vat registration field.
     */
    public function unsetCustomerVatRegistration(): self
    {
        $this->instance->unsetCustomerVatRegistration();
        return $this;
    }

    /**
     * Sets merchant vat registration field.
     */
    public function merchantVatRegistration(?string $value): self
    {
        $this->instance->setMerchantVatRegistration($value);
        return $this;
    }

    /**
     * Unsets merchant vat registration field.
     */
    public function unsetMerchantVatRegistration(): self
    {
        $this->instance->unsetMerchantVatRegistration();
        return $this;
    }

    /**
     * Sets order date field.
     */
    public function orderDate(?string $value): self
    {
        $this->instance->setOrderDate($value);
        return $this;
    }

    /**
     * Unsets order date field.
     */
    public function unsetOrderDate(): self
    {
        $this->instance->unsetOrderDate();
        return $this;
    }

    /**
     * Sets summary commodity code field.
     */
    public function summaryCommodityCode(?string $value): self
    {
        $this->instance->setSummaryCommodityCode($value);
        return $this;
    }

    /**
     * Unsets summary commodity code field.
     */
    public function unsetSummaryCommodityCode(): self
    {
        $this->instance->unsetSummaryCommodityCode();
        return $this;
    }

    /**
     * Sets tax rate field.
     */
    public function taxRate(?int $value): self
    {
        $this->instance->setTaxRate($value);
        return $this;
    }

    /**
     * Unsets tax rate field.
     */
    public function unsetTaxRate(): self
    {
        $this->instance->unsetTaxRate();
        return $this;
    }

    /**
     * Sets unique vat ref number field.
     */
    public function uniqueVatRefNumber(?string $value): self
    {
        $this->instance->setUniqueVatRefNumber($value);
        return $this;
    }

    /**
     * Unsets unique vat ref number field.
     */
    public function unsetUniqueVatRefNumber(): self
    {
        $this->instance->unsetUniqueVatRefNumber();
        return $this;
    }

    /**
     * Sets line items field.
     */
    public function lineItems(?array $value): self
    {
        $this->instance->setLineItems($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new level 3 data object.
     */
    public function build(): Level3Data
    {
        return CoreHelper::clone($this->instance);
    }
}
