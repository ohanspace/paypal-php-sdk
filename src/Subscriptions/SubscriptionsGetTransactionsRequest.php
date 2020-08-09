<?php

namespace Ohanspace\PayPalPHPSdk\Subscriptions;

use PayPalHttp\HttpRequest;

class SubscriptionsGetTransactionsRequest extends HttpRequest
{
    function __construct($subscriptionId, $start_time, $end_time)
    {
        parent::__construct("/v1/billing/subscriptions/{subscription_id}/transactions?start_time={start_time}&end_time={end_time}", "GET");
        $this->path = str_replace("{subscription_id}", urlencode($subscriptionId), $this->path);
        $this->path = str_replace("{start_time}", urlencode($start_time), $this->path);
        $this->path = str_replace("{end_time}", urlencode($end_time), $this->path);

        $this->headers["Content-Type"] = "application/json";
    }
}
