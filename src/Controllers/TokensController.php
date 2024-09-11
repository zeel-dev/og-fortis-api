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
use FortisAPILib\Models\Expand44Enum;
use FortisAPILib\Models\Field49Enum;
use FortisAPILib\Models\FilterBy;
use FortisAPILib\Models\Format1Enum;
use FortisAPILib\Models\Order19;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseToken;
use FortisAPILib\Models\ResponseTokensCollection;
use FortisAPILib\Models\V1TokensAchRequest;
use FortisAPILib\Models\V1TokensAchRequest1;
use FortisAPILib\Models\V1TokensCcRequest;
use FortisAPILib\Models\V1TokensCcRequest1;
use FortisAPILib\Models\V1TokensPreviousTransactionRequest;
use FortisAPILib\Models\V1TokensTerminalRequest;
use FortisAPILib\Models\V1TokensTicketRequest;
use FortisAPILib\Models\V1TokensWalletRequest;

class TokensController extends BaseController
{
    /**
     * @param V1TokensAchRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewACHToken(V1TokensAchRequest $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tokens/ach')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param V1TokensCcRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewCreditCardToken(V1TokensCcRequest $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tokens/cc')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param V1TokensPreviousTransactionRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewPreviousTransactionToken(
        V1TokensPreviousTransactionRequest $body,
        ?array $expand = null
    ): ResponseToken {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tokens/previous-transaction')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param V1TokensTerminalRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewTerminalToken(V1TokensTerminalRequest $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tokens/terminal')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param V1TokensTicketRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewTicketToken(V1TokensTicketRequest $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tokens/ticket')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param V1TokensWalletRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createANewWalletToken(V1TokensWalletRequest $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tokens/wallet')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $tokenId A unique, system-generated identifier for the Token.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteASingleTokenRecord(string $tokenId): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/v1/tokens/{token_id}')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(TemplateParam::init('token_id', $tokenId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $tokenId A unique, system-generated identifier for the Token.
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     * @param string[]|null $fields You can use any `field_name` from this endpoint results to
     *        filter the list of fields returned on the response.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleTokenRecord(string $tokenId, ?array $expand = null, ?array $fields = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/tokens/{token_id}')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                TemplateParam::init('token_id', $tokenId),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue']),
                QueryParam::init('fields', $fields)->serializeBy([Field49Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseToken::class);

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
     * @return ResponseTokensCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllTokensRelated(
        ?Page $page = null,
        ?array $order = null,
        ?array $filterBy = null,
        ?array $expand = null,
        ?string $format = null,
        ?string $typeahead = null,
        ?array $fields = null
    ): ResponseTokensCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/tokens')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('order', $order),
                QueryParam::init('filter_by', $filterBy),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue']),
                QueryParam::init('_format', $format)->serializeBy([Format1Enum::class, 'checkValue']),
                QueryParam::init('_typeahead', $typeahead),
                QueryParam::init('fields', $fields)->serializeBy([Field49Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTokensCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $tokenId A unique, system-generated identifier for the Token.
     * @param V1TokensAchRequest1 $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateACHToken(string $tokenId, V1TokensAchRequest1 $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/v1/tokens/{token_id}/ach')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                TemplateParam::init('token_id', $tokenId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $tokenId A unique, system-generated identifier for the Token.
     * @param V1TokensCcRequest1 $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseToken Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCCToken(string $tokenId, V1TokensCcRequest1 $body, ?array $expand = null): ResponseToken
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/v1/tokens/{token_id}/cc')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                TemplateParam::init('token_id', $tokenId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand44Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseToken::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
