<?php

namespace Tekrom\Ecommerce\Dto;

class InvoiceAddress
{
   private int $id;
   private string $firstname;
   private string $lastname;
   private string $city;
   private string $district;
   private int $countryCode;
   private int $taxNumber;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstName(string $firstname): void
    {
        $this->firstname = $firstname;
    }
    /**
    * @return string
    */
    public function getLastName(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastName(string $lastname): void
    {
        $this->lastname = $lastname;
    }
    /**
      * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
    /**
    * @return string
    */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @param string $district
     */
    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }/**
     * @return integer
     */
    public function getCountryCode(): int
    {
        return $this->countryCode;
    }

    /**
     * @param integer $countryCode
     */
    public function setCountryCode(int $countryCode): void
    {
        $this->countryCode = $countryCode;
    }
    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    /**
     * @return integer
     */
    public function getTaxNumber(): int
    {
        return $this->taxNumber;
    }

    /**
     * @param integer $taxNumber
     */
    public function setTaxNumber(int $taxNumber): void
    {
        $this->taxNumber = $taxNumber;
    }
}