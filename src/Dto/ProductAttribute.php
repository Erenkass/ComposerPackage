<?php

namespace Tekrom\Ecommerce\Dto;

use Tekrom\Ecommerce\Platform\Trendyol;

class ProductAttribute
{

    private string $name;
    private int $Id;
    private int $attributeValueId = 0;
    private string $attributeValue = ' ';

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
    }
    /**
     * @return integer
     */
    public function getAttributeValueId(): int
    {
        return $this->attributeValueId;
    }

    /**
     * @param integer $attributeValueId
     */
    public function setAttributeValueId(int $attributeValueId): void
    {
        $this->attributeValueId = $attributeValueId;
    }
    /**
     * @return string
     */
    public function getAttributeValue(): string
    {
        return $this->attributeValue;
    }

    /**
     * @param string $attributeValue
     */
    public function setAttributeValue(string $attributeValue): void
    {
        $this->attributeValue = $attributeValue;
    }



}