<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\LineItem5;

/**
 * Builder for model LineItem5
 *
 * @see LineItem5
 */
class LineItem5Builder
{
    /**
     * @var LineItem5
     */
    private $instance;

    private function __construct(LineItem5 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new line item 5 Builder object.
     */
    public static function init(string $description, string $productCode, string $unitCode, int $unitCost): self
    {
        return new self(new LineItem5($description, $productCode, $unitCode, $unitCost));
    }

    /**
     * Sets alternate tax id field.
     */
    public function alternateTaxId(?string $value): self
    {
        $this->instance->setAlternateTaxId($value);
        return $this;
    }

    /**
     * Unsets alternate tax id field.
     */
    public function unsetAlternateTaxId(): self
    {
        $this->instance->unsetAlternateTaxId();
        return $this;
    }

    /**
     * Sets debit credit field.
     */
    public function debitCredit(?string $value): self
    {
        $this->instance->setDebitCredit($value);
        return $this;
    }

    /**
     * Unsets debit credit field.
     */
    public function unsetDebitCredit(): self
    {
        $this->instance->unsetDebitCredit();
        return $this;
    }

    /**
     * Sets discount amount field.
     */
    public function discountAmount(?int $value): self
    {
        $this->instance->setDiscountAmount($value);
        return $this;
    }

    /**
     * Unsets discount amount field.
     */
    public function unsetDiscountAmount(): self
    {
        $this->instance->unsetDiscountAmount();
        return $this;
    }

    /**
     * Sets discount rate field.
     */
    public function discountRate(?int $value): self
    {
        $this->instance->setDiscountRate($value);
        return $this;
    }

    /**
     * Unsets discount rate field.
     */
    public function unsetDiscountRate(): self
    {
        $this->instance->unsetDiscountRate();
        return $this;
    }

    /**
     * Sets quantity field.
     */
    public function quantity(?int $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Unsets quantity field.
     */
    public function unsetQuantity(): self
    {
        $this->instance->unsetQuantity();
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
     * Sets tax type applied field.
     */
    public function taxTypeApplied(?string $value): self
    {
        $this->instance->setTaxTypeApplied($value);
        return $this;
    }

    /**
     * Unsets tax type applied field.
     */
    public function unsetTaxTypeApplied(): self
    {
        $this->instance->unsetTaxTypeApplied();
        return $this;
    }

    /**
     * Sets tax type id field.
     */
    public function taxTypeId(?string $value): self
    {
        $this->instance->setTaxTypeId($value);
        return $this;
    }

    /**
     * Unsets tax type id field.
     */
    public function unsetTaxTypeId(): self
    {
        $this->instance->unsetTaxTypeId();
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
     * Initializes a new line item 5 object.
     */
    public function build(): LineItem5
    {
        return CoreHelper::clone($this->instance);
    }
}
