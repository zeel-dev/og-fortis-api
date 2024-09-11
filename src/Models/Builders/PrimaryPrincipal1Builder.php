<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\PrimaryPrincipal1;

/**
 * Builder for model PrimaryPrincipal1
 *
 * @see PrimaryPrincipal1
 */
class PrimaryPrincipal1Builder
{
    /**
     * @var PrimaryPrincipal1
     */
    private $instance;

    private function __construct(PrimaryPrincipal1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new primary principal 1 Builder object.
     */
    public static function init(string $firstName, string $lastName): self
    {
        return new self(new PrimaryPrincipal1($firstName, $lastName));
    }

    /**
     * Sets middle name field.
     */
    public function middleName(?string $value): self
    {
        $this->instance->setMiddleName($value);
        return $this;
    }

    /**
     * Unsets middle name field.
     */
    public function unsetMiddleName(): self
    {
        $this->instance->unsetMiddleName();
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Unsets title field.
     */
    public function unsetTitle(): self
    {
        $this->instance->unsetTitle();
        return $this;
    }

    /**
     * Sets date of birth field.
     */
    public function dateOfBirth(?string $value): self
    {
        $this->instance->setDateOfBirth($value);
        return $this;
    }

    /**
     * Unsets date of birth field.
     */
    public function unsetDateOfBirth(): self
    {
        $this->instance->unsetDateOfBirth();
        return $this;
    }

    /**
     * Sets address line 1 field.
     */
    public function addressLine1(?string $value): self
    {
        $this->instance->setAddressLine1($value);
        return $this;
    }

    /**
     * Unsets address line 1 field.
     */
    public function unsetAddressLine1(): self
    {
        $this->instance->unsetAddressLine1();
        return $this;
    }

    /**
     * Sets address line 2 field.
     */
    public function addressLine2(?string $value): self
    {
        $this->instance->setAddressLine2($value);
        return $this;
    }

    /**
     * Unsets address line 2 field.
     */
    public function unsetAddressLine2(): self
    {
        $this->instance->unsetAddressLine2();
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Unsets city field.
     */
    public function unsetCity(): self
    {
        $this->instance->unsetCity();
        return $this;
    }

    /**
     * Sets state province field.
     */
    public function stateProvince(?string $value): self
    {
        $this->instance->setStateProvince($value);
        return $this;
    }

    /**
     * Unsets state province field.
     */
    public function unsetStateProvince(): self
    {
        $this->instance->unsetStateProvince();
        return $this;
    }

    /**
     * Sets postal code field.
     */
    public function postalCode(?string $value): self
    {
        $this->instance->setPostalCode($value);
        return $this;
    }

    /**
     * Unsets postal code field.
     */
    public function unsetPostalCode(): self
    {
        $this->instance->unsetPostalCode();
        return $this;
    }

    /**
     * Sets ssn field.
     */
    public function ssn(?string $value): self
    {
        $this->instance->setSsn($value);
        return $this;
    }

    /**
     * Unsets ssn field.
     */
    public function unsetSsn(): self
    {
        $this->instance->unsetSsn();
        return $this;
    }

    /**
     * Sets ownership percent field.
     */
    public function ownershipPercent(?int $value): self
    {
        $this->instance->setOwnershipPercent($value);
        return $this;
    }

    /**
     * Unsets ownership percent field.
     */
    public function unsetOwnershipPercent(): self
    {
        $this->instance->unsetOwnershipPercent();
        return $this;
    }

    /**
     * Sets phone number field.
     */
    public function phoneNumber(?string $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets phone number field.
     */
    public function unsetPhoneNumber(): self
    {
        $this->instance->unsetPhoneNumber();
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
     * Initializes a new primary principal 1 object.
     */
    public function build(): PrimaryPrincipal1
    {
        return CoreHelper::clone($this->instance);
    }
}
