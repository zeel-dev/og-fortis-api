<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress5;

/**
 * Builder for model BillingAddress5
 *
 * @see BillingAddress5
 */
class BillingAddress5Builder
{
    /**
     * @var BillingAddress5
     */
    private $instance;

    private function __construct(BillingAddress5 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new billing address 5 Builder object.
     */
    public static function init(): self
    {
        return new self(new BillingAddress5());
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
     * Sets street field.
     */
    public function street(?string $value): self
    {
        $this->instance->setStreet($value);
        return $this;
    }

    /**
     * Unsets street field.
     */
    public function unsetStreet(): self
    {
        $this->instance->unsetStreet();
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
     * Initializes a new billing address 5 object.
     */
    public function build(): BillingAddress5
    {
        return CoreHelper::clone($this->instance);
    }
}
