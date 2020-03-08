<?php

namespace Pnoexz\ApiException\Http\ServerError;

class NetworkConnectTimeoutErrorException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Network Connect Timeout Error';

    /** @var int */
    protected $statusCode = 599;
}
