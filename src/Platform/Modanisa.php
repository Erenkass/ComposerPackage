<?php

namespace Tekrom\Ecommerce\Platform;

use Tekrom\Ecommerce\Accessibility\Curl;
use Tekrom\Ecommerce\Dto\InvoiceAddress;
use Tekrom\Ecommerce\Dto\Order;
use Tekrom\Ecommerce\Dto\Product;
use Tekrom\Ecommerce\Interface\IPlatform;
use Tekrom\Ecommerce\Request\OrderRequest;
use Tekrom\Ecommerce\Request\ProductRequest;
use Tekrom\Ecommerce\Dto\OrderShipmentAddress;

class Modanisa implements IPlatform
{
    public array $config;
    public array $header;

    function __construct($config)
    {
        $this->config=$config;
    }

    public function login():array{
        $this->header = ['Authorization: Basic ' . base64_encode($this->config['api_key'] . ':' . $this->config['api_secret'])];
        return $this->header;
    }

    public function getProducts(ProductRequest $request)
    {

        $data = [
            "page"=>$request->getPage(),
            "size"=>$request->getSize(),
            "startTime"=>$request->getStartTime(),
            "endTime"=>$request->getEndTime()
        ];

        $this->login();

        $url = "https://marketplace-stg.modanisa.com/api/marketplace/products/filter";
        $data = (new Curl())->getData($url,'GET',$data,$this->header)['data'];
        foreach ($data as $d){
            $product = new Product();
            $product->setProductId($d['products']['product_id']);
            $product->setCreateDateTime($d['products']['created_date']);
            $product->setPrice($d['products']['prices']);

        }
    }


    function getOrders(OrderRequest $request)
    {
        $data = [
            "page"=>$request->getPage(),
            "size"=>$request->getSize(),
            "startTime"=>$request->getStartTime(),
            "endTime"=>$request->getEndTime()
        ];

        $this->login();

        $url = "https://marketplace-stg.modanisa.com/api/marketplace/orderListV2";
        $data = (new Curl())->getData($url,'GET',$data,$this->header)['data'];
        foreach ($data as $d ){
            $details = $d['orders']['details'];
            $order = new Order();
            $order->setOrderNumber($d['orders']['details']['orderId']);
            $order->setTotalPrice($details['products']['price']);

            $companyInfolist = [];
            $companyInfo = new OrderShipmentAddress();
            $companyInfo->setFirstName($d['companyInfo']['name']);
            $companyInfo->setDistrict($d['companyInfo']['district']);
            $companyInfo->setCityCode($d['companyInfo']['zip']);
            $companyInfo->setCity($d['companyInfo']['city']);
            $companyInfo->setAddress($d['companyInfo']['address']);

            $companyInfolist[] = $companyInfo;
            $order->setShipmentAddress($companyInfolist);

            $invoiceAddresslist = [];
            $inv =$d['companyInfo'];
            $invoiceAddress = new InvoiceAddress();
            $invoiceAddress->setCountryCode($inv['invoiceInfo']['zip']);
            $invoiceAddress->setDistrict($inv['invoiceInfo']['district']);
            $invoiceAddress->setCity($inv['invoiceInfo']['city']);
            $invoiceAddress->setTaxNumber($inv['invoiceInfo']['taxNumber']);

            $invoiceAddresslist[] = $invoiceAddress;
            $order->setInvoiceAddress($invoiceAddresslist);


        }

        return $data['data']['orders'];

    }


}
