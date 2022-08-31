<?php

namespace Tekrom\Ecommerce\Dto;

class Order
{
  private string $customerEmail;
  private array $shipmentAddress;
  private array $invoiceAddress;
  private int $totalPrice;
  private array $lines;
  private int $customerId;
  private int $ordernumber;
    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     */
    public function setCustomerEmail(string $customerEmail): void
    {
        $this->customerEmail = $customerEmail;
    }
    /**
     * @return array
     */
    public function getShipmentAddress(): array
    {
        return $this->shipmentAddress;
    }

    /**
     * @param array $shipmentAddress
     */
    public function setShipmentAddress(array $shipmentAddress): void
    {
        $this->shipmentAddress = $shipmentAddress;
    }
    /**
     * @return array
     */
    public function getInvoiceAddress(): array
    {
        return $this->invoiceAddress;
    }

    /**
     * @param array $invoiceAddress
     */
    public function setInvoiceAddress(array $invoiceAddress): void
    {
        $this->invoiceAddress = $invoiceAddress;
    }
    /**
     * @return integer
     */
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @param integer $totalPrice
     */
    public function setTotalPrice(int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
    /**
     * @return array
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    /**
     * @param array $lines
     */
    public function setLines(array $lines): void
    {
        $this->lines = $lines;
    }
    /**
     * @return integer
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @param integer $customerId
     */
    public function setCustomerId(int $customerId): void
    {
        $this->customerId = $customerId;
    }
    /**
     * @return integer
     */
    public function getOrderNumber(): int
    {
        return $this->ordernumber;
    }

    /**
     * @param integer $ordernumber
     */
    public function setOrderNumber(int $ordernumber): void
    {
        $this->ordernumber = $ordernumber;
    }

}