<?php

namespace Tekrom\Ecommerce\Interface;
use Tekrom\Ecommerce\Request\OrderRequest;
use Tekrom\Ecommerce\Request\ProductRequest;

interface IPlatform {

    public function getProducts(ProductRequest $request);

    public function getOrders(OrderRequest $request);

}