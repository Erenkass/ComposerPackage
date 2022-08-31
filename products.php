
<?php

require "vendor/autoload.php";

use Tekrom\Ecommerce\Factory\PlatformFactory;


$config = [
    "api_key" => "apikey",
    "api_secret" => "apisecret",
    "supplier_id" => "suplierid"
];

$platform = PlatformFactory::create("trendyol", $config);

$request = new \Tekrom\Ecommerce\Request\ProductRequest();

    $request->setStartTime(time()-(60*60*24));
    $request->setEndTime(time());
    $request->setPage(1);
    $request->setSize(10);

    $products = $platform->getProducts($request);
$product=new \Tekrom\Ecommerce\Dto\Product();
foreach ($products as $product) {
    var_dump($product->getName());

}


