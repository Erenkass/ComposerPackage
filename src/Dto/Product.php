<?php

namespace Tekrom\Ecommerce\Dto;


class Product
{
    private int $productId;
    private string $name;
    private array $images;
    private array $attributes;
    private string $description;
    private int $price;
    private int $createDateTime;
    private int $lastUpdateDate;
    private int $supplierId;
    private string $brand;
    private string $stockUnitType;
    private string $stockCode;
    private string $stockId;
    private string $color;
    private int $version;

    /**
     * @return integer
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param integer $productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

     /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    /**
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
     * @return integer
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }

    /**
     * @param integer $createDateTime
     */
    public function setCreateDateTime(int $createDateTime): void
    {
        $this->createDateTime = $createDateTime;
    }
    /**
     * @return integer
     */
    public function getLastUpdateDate(): int
    {
        return $this->lastUpdateDate;
    }

    /**
     * @param integer $lastUpdateDate
     */
    public function setLastUpdateDate(int $lastUpdateDate): void
    {
        $this->lastUpdateDate = $lastUpdateDate;
    }
    /**
     * @return integer
     */
    public function getSupplierId(): int
    {
        return $this->supplierId;
    }

    /**
     * @param integer $supplierId
     */
    public function setSupplierId(int $supplierId): void
    {
        $this->supplierId = $supplierId;
    }
    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
    /**
     * @return string
     */
    public function getStockUnitType(): string
    {
        return $this->stockUnitType;
    }

    /**
     * @param string $stockUnitType
     */
    public function setStockUnitType(string $stockUnitType): void
    {
        $this->stockUnitType = $stockUnitType;
    }
    /**
     * @return string
     */
    public function getStockCode(): string
    {
        return $this->stockCode;
    }

    /**
     * @param string $stockCode
     */
    public function setStockCode(string $stockCode): void
    {
        $this->stockCode = $stockCode;
    }
    /**
     * @return string
     */
    public function getStockId(): string
    {
        return $this->stockId;
    }

    /**
     * @param string $stockId
     */
    public function setStockId(string $stockId): void
    {
        $this->stockId = $stockId;
    }
    /**
     * @return integer
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param integer $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }






}