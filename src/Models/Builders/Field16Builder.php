<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Field16;

/**
 * Builder for model Field16
 *
 * @see Field16
 */
class Field16Builder
{
    /**
     * @var Field16
     */
    private $instance;

    private function __construct(Field16 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new field 16 Builder object.
     */
    public static function init(): self
    {
        return new self(new Field16());
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
     * Sets label field.
     */
    public function label(?string $value): self
    {
        $this->instance->setLabel($value);
        return $this;
    }

    /**
     * Sets field type field.
     */
    public function fieldType(?string $value): self
    {
        $this->instance->setFieldType($value);
        return $this;
    }

    /**
     * Sets position field.
     */
    public function position(?array $value): self
    {
        $this->instance->setPosition($value);
        return $this;
    }

    /**
     * Sets required field.
     */
    public function required(?bool $value): self
    {
        $this->instance->setRequired($value);
        return $this;
    }

    /**
     * Sets readonly field.
     */
    public function readonly(?bool $value): self
    {
        $this->instance->setReadonly($value);
        return $this;
    }

    /**
     * Sets visible field.
     */
    public function visible(?bool $value): self
    {
        $this->instance->setVisible($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Unsets value field.
     */
    public function unsetValue(): self
    {
        $this->instance->unsetValue();
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
     * Initializes a new field 16 object.
     */
    public function build(): Field16
    {
        return CoreHelper::clone($this->instance);
    }
}
