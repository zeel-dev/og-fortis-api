<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data27;

/**
 * Builder for model Data27
 *
 * @see Data27
 */
class Data27Builder
{
    /**
     * @var Data27
     */
    private $instance;

    private function __construct(Data27 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 27 Builder object.
     */
    public static function init(): self
    {
        return new self(new Data27());
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
     * Sets user id field.
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets hash field.
     */
    public function hash(?string $value): self
    {
        $this->instance->setHash($value);
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
     * Initializes a new data 27 object.
     */
    public function build(): Data27
    {
        return CoreHelper::clone($this->instance);
    }
}
