<?php

namespace Tekrom\Ecommerce\Platform;

use Tekrom\Ecommerce\Accessibility\Curl;
use Tekrom\Ecommerce\Dto\InvoiceAddress;
use Tekrom\Ecommerce\Dto\Order;
use Tekrom\Ecommerce\Dto\OrderLines;
use Tekrom\Ecommerce\Dto\OrderShipmentAddress;
use Tekrom\Ecommerce\Dto\Product;
use Tekrom\Ecommerce\Dto\ProductAttribute;
use Tekrom\Ecommerce\Request\OrderRequest;
use Tekrom\Ecommerce\Interface\IPlatform;
use Tekrom\Ecommerce\Request\ProductRequest;
use Tekrom\Ecommerce\Dto\ProductImage;

class Trendyol implements IPlatform
{
    public array $config;
    public array $header;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function login():array
    {
        $this->header = ['Authorization: Basic ' . base64_encode($this->config['api_key'] . ':' . $this->config['api_secret'])];
        return $this->header;
    }


    public function getProducts(ProductRequest $request): array
    {
        $url = "https://api.trendyol.com/sapigw/suppliers/" . $this->config['supplier_id'] . "/products?approved=true";
        $start = ($request->getPage() - 1) * $request->getSize();
        $limit = $request->getSize();


        $data = [
            "page" => $request->getPage(),
            "size" => $request->getSize(),
        ];

        $this->login();
        $products = [];

        $data = (new Curl())->getData($url, "GET", $data, $this->header)['content'];

        foreach ($data as $d) {

            $product = new Product();
            $product->setName($d['title']);
            $product->setDescription($d['description']);
            $product->setPrice($d['listPrice']);
            $product->setCreateDateTime($d['createDateTime']);
            $product->setLastUpdateDate($d['lastUpdateDate']);
            $product->setSupplierId($d['supplierId']);
            $product->setBrand($d['brand']);
            $product->setStockUnitType($d['stockUnitType']);
            $product->setStockCode($d['stockCode']);
            $product->setStockId($d['stockId']);
            $product->setVersion($d['version']);

            $attributeList = [];
            foreach ($d["attributes"] as $attr) {

                $attribute = new ProductAttribute();
                $attribute->setName($attr['attributeName']);
                $attribute->setId($attr['attributeId']);
                $attribute->setAttributeValueId($attr['attributeValueId']);
                $attribute->setAttributeValue($attr['attributeValue']);

                $attributeList[] = $attribute;
                var_dump($attributeList);

            }

            $product->setAttributes($attributeList);


            $imageList = [];
            foreach ($d["images"] as $img) {
                $image = new ProductImage();
                $image->setUrl($img["url"]);

                $imageList[] = $image;
            }

            $product->setImages($imageList);

            $products[] = $product;

        }
        return $products;


    }

    function getOrders(OrderRequest $request): array
    {

        $url = "https://api.trendyol.com/sapigw/suppliers/" . $this->config['supplier_id'] . "/orders";
        $start = ($request->getPage() - 1) * $request->getSize();
        $limit = $request->getSize();
        $data = [
            "page" => $request->getPage(),
            "size" => $request->getSize(),
        ];
        $this->login();

        $orders = [];

        $data = (new Curl())->getData($url, 'GET', $data, $this->header)['content'];

        foreach ($data as $d) {

            $order = new Order();
            $order->setCustomerEmail($d['customerEmail']);
            $order->setCustomerId($d['customerId']);
            $order->setOrderNumber($d['orderNumber']);
            $order->setTotalPrice($d['totalPrice']);

            $shipmentAddresslist = [];
            $shipmentAddress = new OrderShipmentAddress();
            $shipmentAddress->setFirstName($d['shipmentAddress']['firstName']);
            $shipmentAddress->setLastName($d['shipmentAddress']['lastName']);
            $shipmentAddress->setCity($d['shipmentAddress']['city']);
            $shipmentAddress->setCityCode($d['shipmentAddress']['cityCode']);
            $shipmentAddress->setDistrict($d['shipmentAddress']['district']);
            $shipmentAddress->setAddress($d['shipmentAddress']['address1']);

            $shipmentAddresslist[]=$shipmentAddress;
            $order->setShipmentAddress($shipmentAddresslist);

            $invoiceAddresslist=[];
            $invoiceAddress = new InvoiceAddress();
            $invoiceAddress->setFirstName($d['invoiceAddress']['firstName']);
            $invoiceAddress->setLastName($d['invoiceAddress']['lastName']);
            $invoiceAddress->setId($d['invoiceAddress']['id']);
            $invoiceAddress->setCity($d['invoiceAddress']['city']);
            $invoiceAddress->setDistrict($d['invoiceAddress']['district']);
            $invoiceAddress->setCountryCode($d['invoiceAddress']['countryCode']);
            $invoiceAddress->setTaxNumber($d['invoiceAddress']['taxNumber']);

            $invoiceAddresslist[]=$invoiceAddress;
            $order->setInvoiceAddress($invoiceAddresslist);

            $lineslist = [];
            foreach ($d['lines'] as $line) {
                $lines = new OrderLines();
                $lines->setProductName($line['productName']);
                $lines->setProductCode($line['productCode']);
                $lines->setPrice($line['price']);
                $lines->setId($line['id']);
                $lines->setCurrencyCode($line['currencyCode']);

                $lineslist[] = $lines;
            }

            $order->setLines($lineslist);

            $orders[] = $order;

        }

        return $orders;
    }

}

