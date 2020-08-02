<?php

namespace Ohanspace\PayPalPHPSdk\Plans;

use PayPalHttp\HttpRequest;

class PlansListRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/billing/plans?total_required=true", "GET");
        $this->headers["Content-Type"] = "application/json";
    }

    public function payPalPartnerAttributionId($payPalPartnerAttributionId)
    {
        $this->headers["PayPal-Partner-Attribution-Id"] = $payPalPartnerAttributionId;
    }

    public function prefer($prefer)
    {
        $this->headers["Prefer"] = $prefer;
    }
}
