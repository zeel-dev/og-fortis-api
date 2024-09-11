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
use FortisAPILib\Models\Pagination;
use FortisAPILib\Models\ResponseTokensCollection;
use FortisAPILib\Models\Sort;

/**
 * Builder for model ResponseTokensCollection
 *
 * @see ResponseTokensCollection
 */
class ResponseTokensCollectionBuilder
{
    /**
     * @var ResponseTokensCollection
     */
    private $instance;

    private function __construct(ResponseTokensCollection $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response tokens collection Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseTokensCollection());
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
     * Sets list field.
     */
    public function list(?array $value): self
    {
        $this->instance->setList($value);
        return $this;
    }

    /**
     * Sets links field.
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets pagination field.
     */
    public function pagination(?Pagination $value): self
    {
        $this->instance->setPagination($value);
        return $this;
    }

    /**
     * Sets sort field.
     */
    public function sort(?Sort $value): self
    {
        $this->instance->setSort($value);
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
     * Initializes a new response tokens collection object.
     */
    public function build(): ResponseTokensCollection
    {
        return CoreHelper::clone($this->instance);
    }
}
