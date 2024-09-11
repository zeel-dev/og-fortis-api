<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Method40 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $productTransactionId;

    /**
     * @param string $type
     * @param string $productTransactionId
     */
    public function __construct(string $type, string $productTransactionId)
    {
        $this->type = $type;
        $this->productTransactionId = $productTransactionId;
    }

    /**
     * Returns Type.
     * Payment type. Must be unique.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Payment type. Must be unique.
     *
     * @required
     * @maps type
     * @factory \FortisAPILib\Models\Type29Enum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Product Transaction Id.
     * The Product's method (cc/ach) has to match the type.
     */
    public function getProductTransactionId(): string
    {
        return $this->productTransactionId;
    }

    /**
     * Sets Product Transaction Id.
     * The Product's method (cc/ach) has to match the type.
     *
     * @required
     * @maps product_transaction_id
     */
    public function setProductTransactionId(string $productTransactionId): void
    {
        $this->productTransactionId = $productTransactionId;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['type']                   = Type29Enum::checkValue($this->type);
        $json['product_transaction_id'] = $this->productTransactionId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
