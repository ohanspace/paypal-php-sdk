<?php

namespace Ohanspace\PayPalPHPSdk\Webhooks;

use PayPalHttp\HttpRequest;

class WebhooksDeleteRequest extends HttpRequest
{
    function __construct($webhookId)
    {
        parent::__construct("/v1/notifications/webhooks/{webhook_id}", "DELETE");
        $this->path = str_replace("{webhook_id}", urlencode($webhookId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
