<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Links;

/**
 * Builder for model Links
 *
 * @see Links
 */
class LinksBuilder
{
    /**
     * @var Links
     */
    private $instance;

    private function __construct(Links $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new links Builder object.
     */
    public static function init(): self
    {
        return new self(new Links());
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets first field.
     */
    public function first(?string $value): self
    {
        $this->instance->setFirst($value);
        return $this;
    }

    /**
     * Sets previous field.
     */
    public function previous(?string $value): self
    {
        $this->instance->setPrevious($value);
        return $this;
    }

    /**
     * Sets next field.
     */
    public function next(?string $value): self
    {
        $this->instance->setNext($value);
        return $this;
    }

    /**
     * Sets last field.
     */
    public function last(?string $value): self
    {
        $this->instance->setLast($value);
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
     * Initializes a new links object.
     */
    public function build(): Links
    {
        return CoreHelper::clone($this->instance);
    }
}
