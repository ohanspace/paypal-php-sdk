<?php

namespace Ohanspace\PayPalPHPSdk\Subscriptions;

use PayPalHttp\HttpRequest;

class SubscriptionsCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/billing/subscriptions", "POST");
        $this->headers["Content-Type"] = "application/json";
    }

    public function payPalRequestId($paypalRequestId)
    {
        $this->headers["PayPal-Request-Id"] = $paypalRequestId;
    }
    

    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
