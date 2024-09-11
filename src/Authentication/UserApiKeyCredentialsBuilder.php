<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing UserApiKey security credentials.
 */
class UserApiKeyCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for UserApiKeyCredentialsBuilder
     *
     * @param string $userApiKey
     */
    public static function init(string $userApiKey): self
    {
        return new self(['userApiKey' => $userApiKey]);
    }

    /**
     * Setter for UserApiKey.
     *
     * @param string $userApiKey
     *
     * @return $this
     */
    public function userApiKey(string $userApiKey): self
    {
        $this->config['userApiKey'] = $userApiKey;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
