<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\LocationUser;

/**
 * Builder for model LocationUser
 *
 * @see LocationUser
 */
class LocationUserBuilder
{
    /**
     * @var LocationUser
     */
    private $instance;

    private function __construct(LocationUser $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new location user Builder object.
     */
    public static function init(): self
    {
        return new self(new LocationUser());
    }

    /**
     * Sets location id field.
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets user id field.
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets created user id field.
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Sets modified user id field.
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
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
     * Initializes a new location user object.
     */
    public function build(): LocationUser
    {
        return CoreHelper::clone($this->instance);
    }
}
