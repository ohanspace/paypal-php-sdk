<?php

namespace Ohanspace\PayPalPHPSdk\Webhooks;

use PayPalHttp\HttpRequest;

class WebhooksListRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/notifications/webhooks", "GET");
        $this->headers["Content-Type"] = "application/json";
    }
}
