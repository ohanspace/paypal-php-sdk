<?php

namespace Ohanspace\PayPalPHPSdk\Webhooks;

use PayPalHttp\HttpRequest;

class WebhooksCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/notifications/webhooks", "POST");
        $this->headers["Content-Type"] = "application/json";
    }
}
