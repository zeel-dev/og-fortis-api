<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Type93;

/**
 * Builder for model Type93
 *
 * @see Type93
 */
class Type93Builder
{
    /**
     * @var Type93
     */
    private $instance;

    private function __construct(Type93 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new type 93 Builder object.
     */
    public static function init(): self
    {
        return new self(new Type93());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
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
     * Initializes a new type 93 object.
     */
    public function build(): Type93
    {
        return CoreHelper::clone($this->instance);
    }
}
