<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use FortisAPILib\Controllers\WebhooksController;
use FortisAPILib\Exceptions;

class WebhooksControllerTest extends BaseTestController
{
    /**
     * @var WebhooksController WebhooksController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getWebhooksController();
    }

    public function testDeleteAPostbackConfig()
    {
        // Parameters for the API call
        $webhookId = '11e95f8ec39de8fbdb0a4f1a';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->deleteAPostbackConfig($webhookId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(204)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"type":"Webhook","data":{"attempt_interval":300,"basic_auth_username":"userna' .
                'me","basic_auth_password":"password","expands":"changelogs,tags","format":"api-' .
                'default","is_active":true,"location_id":"11e95f8ec39de8fbdb0a4f1a","on_create":' .
                'true,"on_update":true,"on_delete":true,"postback_config_id":"11e95f8ec39de8fbdb' .
                '0a4f1a","product_transaction_id":"11e95f8ec39de8fbdb0a4f1a","resource":"contact' .
                '","number_of_attempts":1,"url":"https://127.0.0.1/receiver","id":"11e95f8ec39de' .
                '8fbdb0a4f1a","postback_logs":[{"id":"11e95f8ec39de8fbdb0a4f1a","postback_config' .
                '_id":"11e95f8ec39de8fbdb0a4f1a","changelog_id":"11e95f8ec39de8fbdb0a4f1a","next' .
                '_run_ts":1422040992,"created_ts":1422040992,"model_id":"11e95f8ec39de8fbdb0a4f1' .
                'a"}]}}'
            )))
            ->assert();
    }
}
