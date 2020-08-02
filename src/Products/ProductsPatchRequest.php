<?php


namespace Ohanspace\PayPalPHPSdk\Products;

use PayPalHttp\HttpRequest;

class ProductsPatchRequest extends HttpRequest
{
    function __construct($productId)
    {
        parent::__construct("/v1/catalogs/products/{product_id}?", "PATCH");

        $this->path = str_replace("{product_id}", urlencode($productId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
