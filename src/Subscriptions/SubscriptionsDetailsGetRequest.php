<?php

namespace Ohanspace\PayPalPHPSdk\Subscriptions;

use PayPalHttp\HttpRequest;

class SubscriptionsDetailsGetRequest extends HttpRequest
{
    function __construct($subscriptionId)
    {
        parent::__construct("/v1/billing/subscriptions/{id}", "GET");
        $this->path = str_replace("{id}", urlencode($subscriptionId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
