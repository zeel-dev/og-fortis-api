<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Authentication\Auth;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Models\Expand100Enum;
use FortisAPILib\Models\Field54Enum;
use FortisAPILib\Models\FilterBy;
use FortisAPILib\Models\Format1Enum;
use FortisAPILib\Models\Order19;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseRemoveVerification;
use FortisAPILib\Models\ResponseSendVerification;
use FortisAPILib\Models\ResponseUser;
use FortisAPILib\Models\ResponseUserApiKey;
use FortisAPILib\Models\ResponseUsersCollection;
use FortisAPILib\Models\V1UsersRequest;
use FortisAPILib\Models\V1UsersRequest1;

class UsersController extends BaseController
{
    /**
     * @param string $userId User ID
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseUserApiKey Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewAPIKey(string $userId, ?array $expand = null): ResponseUserApiKey
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/users/{user_id}/api-key')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                TemplateParam::init('user_id', $userId),
                QueryParam::init('expand', $expand)->serializeBy([Expand100Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseUserApiKey::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param V1UsersRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseUser Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewUser(V1UsersRequest $body, ?array $expand = null): ResponseUser
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/users')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand100Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseUser::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Order19[]|null $order Criteria used in query string parameters to order results. Most
     *        fields from the endpoint results can be used as a `key`.  Unsupported fields or
     *        operators will return a `412`.  Must be encoded, or use syntax that does not require
     *        encoding.
     *        >/endpoint?order[0][key]=created_ts&order[0][operator]=asc
     *        >
     *        >/endpoint?order=[{ "key": "created_ts", "operator": "asc"}]
     *        >
     *        >/endpoint?order=[{ "key": "balance", "operator": "desc"},{ "key": "created_ts",
     *        "operator": "asc"}]
     *        >
     * @param FilterBy[]|null $filterBy Filter criteria that can be used in query string parameters.
     *        Most fields from the endpoint results can be used as a `key`.  Unsupported fields or
     *        operators will return a `412`. Must be encoded, or use syntax that does not require
     *        encoding.
     *        >?filter_by[0][key]=first_name&filter_by[0][operator]==&filter_by[0][value]=Steve
     *        >
     *        >/endpoint?filter_by=[{ "key": "first_name", "operator": "=", "value": "Fred" }]
     *        >
     *        >/endpoint?filter_by=[{ "key": "account_type", "operator": "=", "value": "VISA" }]
     *        >
     *        >/endpoint?filter_by=[{ "key": "created_ts", "operator": ">=", "value": "946702799"
     *        }, { "key": "created_ts", "operator": "<=", value: "1695061891" }]
     *        >
     *        >/endpoint?filter_by=[{ "key": "last_name", "operator": "IN", "value": "Williams,
     *        Brown,Allman" }]
     *        >
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     * @param string|null $format Reporting format, valid values: csv, tsv
     * @param string|null $typeahead You can use any `field_name` from this endpoint results to
     *        order the list using the value provided as filter for the same `field_name`. It will
     *        be ordered using the following rules: 1) Exact match, 2) Starts with, 3) Contains.
     * @param string[]|null $fields You can use any `field_name` from this endpoint results to
     *        filter the list of fields returned on the response.
     *
     * @return ResponseUsersCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllUser(
        ?Page $page = null,
        ?array $order = null,
        ?array $filterBy = null,
        ?array $expand = null,
        ?string $format = null,
        ?string $typeahead = null,
        ?array $fields = null
    ): ResponseUsersCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/users')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('order', $order),
                QueryParam::init('filter_by', $filterBy),
                QueryParam::init('expand', $expand)->serializeBy([Expand100Enum::class, 'checkValue']),
                QueryParam::init('_format', $format)->serializeBy([Format1Enum::class, 'checkValue']),
                QueryParam::init('_typeahead', $typeahead),
                QueryParam::init('fields', $fields)->serializeBy([Field54Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseUsersCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $userId User ID
     *
     * @return ResponseUser Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteAUserRecord(string $userId): ResponseUser
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v1/users/{user_id}')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(TemplateParam::init('user_id', $userId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseUser::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $userId User ID
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     * @param string[]|null $fields You can use any `field_name` from this endpoint results to
     *        filter the list of fields returned on the response.
     *
     * @return ResponseUser Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleUserRecord(string $userId, ?array $expand = null, ?array $fields = null): ResponseUser
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/users/{user_id}')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                TemplateParam::init('user_id', $userId),
                QueryParam::init('expand', $expand)->serializeBy([Expand100Enum::class, 'checkValue']),
                QueryParam::init('fields', $fields)->serializeBy([Field54Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseUser::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $userId User ID
     * @param V1UsersRequest1 $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseUser Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateAUserRecord(string $userId, V1UsersRequest1 $body, ?array $expand = null): ResponseUser
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/v1/users/{user_id}')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                TemplateParam::init('user_id', $userId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand100Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseUser::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     * @param string[]|null $fields You can use any `field_name` from this endpoint results to
     *        filter the list of fields returned on the response.
     *
     * @return ResponseUser Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSelfRecord(?array $expand = null, ?array $fields = null): ResponseUser
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/users/me')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                QueryParam::init('expand', $expand)->serializeBy([Expand100Enum::class, 'checkValue']),
                QueryParam::init('fields', $fields)->serializeBy([Field54Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseUser::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Remove the pending user
     *
     * @param string $userId
     *
     * @return ResponseRemoveVerification Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function removeVerification(string $userId): ResponseRemoveVerification
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v1/users/{user_id}/remove-verification')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(TemplateParam::init('user_id', $userId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseRemoveVerification::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Send an verification email to the pending user
     *
     * @param string $userId
     *
     * @return ResponseSendVerification Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function sendVerification(string $userId): ResponseSendVerification
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/users/{user_id}/send-verification')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(TemplateParam::init('user_id', $userId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseSendVerification::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
