<?php

namespace Ohanspace\PayPalPHPSdk\Webhooks;

use PayPalHttp\HttpRequest;

class WebhooksDetailsRequest extends HttpRequest
{
    function __construct($webhookId)
    {
        parent::__construct("/v1/notifications/webhooks/{webhook_id}", "GET");
        $this->path = str_replace("{webhook_id}", urlencode($webhookId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
