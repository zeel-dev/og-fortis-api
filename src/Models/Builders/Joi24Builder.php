<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Conditions24;
use FortisAPILib\Models\Joi24;

/**
 * Builder for model Joi24
 *
 * @see Joi24
 */
class Joi24Builder
{
    /**
     * @var Joi24
     */
    private $instance;

    private function __construct(Joi24 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new joi 24 Builder object.
     */
    public static function init(): self
    {
        return new self(new Joi24());
    }

    /**
     * Sets conditions field.
     */
    public function conditions(?Conditions24 $value): self
    {
        $this->instance->setConditions($value);
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
     * Initializes a new joi 24 object.
     */
    public function build(): Joi24
    {
        return CoreHelper::clone($this->instance);
    }
}
