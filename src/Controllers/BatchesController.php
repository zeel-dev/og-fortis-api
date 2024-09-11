<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Authentication\Auth;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Models\ExpandEnum;
use FortisAPILib\Models\Field25Enum;
use FortisAPILib\Models\FilterBy;
use FortisAPILib\Models\Format1Enum;
use FortisAPILib\Models\Order19;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseAsyncProcessing;
use FortisAPILib\Models\ResponseBatchsCollection;

class BatchesController extends BaseController
{
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
     * @return ResponseBatchsCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllBatches(
        ?Page $page = null,
        ?array $order = null,
        ?array $filterBy = null,
        ?array $expand = null,
        ?string $format = null,
        ?string $typeahead = null,
        ?array $fields = null
    ): ResponseBatchsCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/batches')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('order', $order),
                QueryParam::init('filter_by', $filterBy),
                QueryParam::init('expand', $expand)->serializeBy([ExpandEnum::class, 'checkValue']),
                QueryParam::init('_format', $format)->serializeBy([Format1Enum::class, 'checkValue']),
                QueryParam::init('_typeahead', $typeahead),
                QueryParam::init('fields', $fields)->serializeBy([Field25Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseBatchsCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $batchId Batch ID
     *
     * @return ResponseAsyncProcessing Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function settleABatch(string $batchId): ResponseAsyncProcessing
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/v1/batches/{batch_id}/settle')
            ->auth(Auth::and('user-id', 'user-api-key', 'developer-id'))
            ->parameters(TemplateParam::init('batch_id', $batchId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseAsyncProcessing::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
