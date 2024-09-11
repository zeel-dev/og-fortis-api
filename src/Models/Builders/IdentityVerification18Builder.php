<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\IdentityVerification18;

/**
 * Builder for model IdentityVerification18
 *
 * @see IdentityVerification18
 */
class IdentityVerification18Builder
{
    /**
     * @var IdentityVerification18
     */
    private $instance;

    private function __construct(IdentityVerification18 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new identity verification 18 Builder object.
     */
    public static function init(string $dlState, string $dlNumber): self
    {
        return new self(new IdentityVerification18($dlState, $dlNumber));
    }

    /**
     * Sets ssn 4 field.
     */
    public function ssn4(?string $value): self
    {
        $this->instance->setSsn4($value);
        return $this;
    }

    /**
     * Unsets ssn 4 field.
     */
    public function unsetSsn4(): self
    {
        $this->instance->unsetSsn4();
        return $this;
    }

    /**
     * Sets dob year field.
     */
    public function dobYear(?string $value): self
    {
        $this->instance->setDobYear($value);
        return $this;
    }

    /**
     * Unsets dob year field.
     */
    public function unsetDobYear(): self
    {
        $this->instance->unsetDobYear();
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
     * Initializes a new identity verification 18 object.
     */
    public function build(): IdentityVerification18
    {
        return CoreHelper::clone($this->instance);
    }
}
