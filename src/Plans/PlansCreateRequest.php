<?php

namespace Ohanspace\PayPalPHPSdk\Plans;

use PayPalHttp\HttpRequest;

class PlansCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/billing/plans?", "POST");
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
