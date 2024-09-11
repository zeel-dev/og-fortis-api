<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Async;
use FortisAPILib\Models\Data1;

/**
 * Builder for model Data1
 *
 * @see Data1
 */
class Data1Builder
{
    /**
     * @var Data1
     */
    private $instance;

    private function __construct(Data1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Data1());
    }

    /**
     * Sets async field.
     */
    public function async(?Async $value): self
    {
        $this->instance->setAsync($value);
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
     * Initializes a new data 1 object.
     */
    public function build(): Data1
    {
        return CoreHelper::clone($this->instance);
    }
}
