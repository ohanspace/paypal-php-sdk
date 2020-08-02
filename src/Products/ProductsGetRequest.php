<?php


namespace Ohanspace\PayPalPHPSdk\Products;

use PayPalHttp\HttpRequest;

class ProductsGetRequest extends HttpRequest
{
    function __construct($productId)
    {
        parent::__construct("/v1/catalogs/products/{product_id}?", "GET");

        $this->path = str_replace("{product_id}", urlencode($productId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }



}
