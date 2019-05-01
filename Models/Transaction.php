<?php

// Mollie Shopware Plugin Version: 1.4.4

namespace MollieShopware\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="MollieShopware\Models\TransactionRepository")
 * @ORM\Table(name="mol_sw_transactions")
 */
class Transaction
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="transaction_id", type="string", nullable=true)
     */
    private $transactionId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=true)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="mollie_id", type="string", nullable=true)
     */
    private $mollieId;

    /**
     * @var string
     *
     * @ORM\Column(name="mollie_payment_id", type="string", nullable=true)
     */
    private $molliePaymentId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", nullable=true)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ordermail_variables", type="text", nullable=true)
     */
    private $ordermailVariables;

    /**
     * INVERSE SIDE
     *
     * @var \Doctrine\Common\Collections\ArrayCollection<\MollieShopware\Models\TransactionItem>
     *
     * @ORM\OneToMany(targetEntity="\MollieShopware\Models\TransactionItem", mappedBy="transaction", orphanRemoval=true, cascade={"persist"})
     */
    private $items;

    /**
     * @return string
     *
     * @ORM\Column(name="locale", type="string", nullable=true)
     */
    private $locale;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var \Shopware\Models\Customer\Customer
     *
     * @ORM\ManyToOne(targetEntity="\Shopware\Models\Customer\Customer")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;

    /**
     * @return string
     *
     * @ORM\Column(name="currency", type="string", nullable=true)
     */
    private $currency;

    /**
     * @return string
     *
     * @ORM\Column(name="total_amount", type="integer", nullable=true)
     */
    private $totalAmount;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getMollieId()
    {
        return $this->mollieId;
    }

    public function setMollieId($mollieId)
    {
        $this->mollieId = $mollieId;
    }

    public function getMolliePaymentId()
    {
        return $this->molliePaymentId;
    }

    public function setMolliePaymentId($molliePaymentId)
    {
        $this->molliePaymentId = $molliePaymentId;
    }

    public function getSessionId()
    {
        return $this->sessionId;
    }

    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    public function setOrdermailVariables($ordermailVariables)
    {
        $this->ordermailVariables = $ordermailVariables;
    }

    public function getOrdermailVariables()
    {
        return $this->ordermailVariables;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getItems(): \Doctrine\Common\Collections\ArrayCollection
    {
        return $this->items;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $items
     * @return Transaction
     */
    public function setItems(\Doctrine\Common\Collections\ArrayCollection $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $locale
     * @return Transaction
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return Transaction
     */
    public function setCustomerId(int $customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return \Shopware\Models\Customer\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param \Shopware\Models\Customer\Customer $customer
     * @return Transaction
     */
    public function setCustomer(\Shopware\Models\Customer\Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     * @return Transaction
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     * @return Transaction
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
}