<?php

namespace Tekrom\Ecommerce\Dto;

class OrderShipmentAddress
{
private string $firstname;
private string $lastname;
private string $city;
private int $citycode;
private string $district;
private string $address;
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
    } /**
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
    } /**
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
    } /**
      * @return integer
     */
     public function getCityCode(): int
    {
        return $this->citycode;
    }

    /**
     * @param integer $citycode
     */
    public function setCityCode(int $citycode): void
    {
        $this->citycode = $citycode;
    } /**
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
    }
    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
}