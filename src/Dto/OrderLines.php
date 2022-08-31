<?php

namespace Tekrom\Ecommerce\Dto;

class OrderLines
{
private string $productname;
private int $productcode;
private int $Id;
private int $price;
private string $currencycode;
    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productname;
    }

    /**
     * @param string $productname
     */
    public function setProductName(string $productname): void
    {
        $this->productname = $productname;
    }
    /**
     * @return integer
     */
    public function getProductCode(): int
    {
        return $this->productcode;
    }

    /**
     * @param integer $productcode
     */
    public function setProductCode(int $productcode): void
    {
        $this->productcode = $productcode;
    }
    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @param integer $Id
     */
    public function setId(int $Id): void
    {
        $this->Id = $Id;
    }/**
    * @return integer
    */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param integer $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencycode;
    }

    /**
     * @param string $currencycode
     */
    public function setCurrencyCode(string $currencycode): void
    {
        $this->currencycode = $currencycode;
    }
}