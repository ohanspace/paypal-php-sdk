<?php

namespace Ohanspace\PayPalPHPSdk\Subscriptions;

use PayPalHttp\HttpRequest;

class SubscriptionsCancelRequest extends HttpRequest
{
    function __construct($subscriptionId)
    {
        parent::__construct("/v1/billing/subscriptions/{id}/cancel", "POST");
        $this->path = str_replace("{id}", urlencode($subscriptionId), $this->path);
        $this->headers["Content-Type"] = "application/json";
        $this->body = [
            "reason" => "NA"
        ];
    }
}
