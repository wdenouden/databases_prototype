<?php

namespace App\Entity;

use App\Repository\TransactionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\TransactionProduct;

/**
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $trans_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status = 2;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $time;

    /**
     * @ORM\Column(type="integer")
     */
    private $pos_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $pos_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $location_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $organization_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ref;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $user_name;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @var boolean
     */
    private $is_refund;

    /**
     * @var TransactionProduct[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="TransactionProduct", mappedBy="transaction")
     */
    private $transaction_products;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTransId()
    {
        return $this->trans_id;
    }

    /**
     * @param mixed $trans_id
     */
    public function setTransId($trans_id): void
    {
        $this->trans_id = $trans_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime(\DateTime $time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getPosId()
    {
        return $this->pos_id;
    }

    /**
     * @param mixed $pos_id
     */
    public function setPosId($pos_id): void
    {
        $this->pos_id = $pos_id;
    }

    /**
     * @return mixed
     */
    public function getPosName()
    {
        return $this->pos_name;
    }

    /**
     * @param mixed $pos_name
     */
    public function setPosName($pos_name): void
    {
        $this->pos_name = $pos_name;
    }

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * @param mixed $location_id
     */
    public function setLocationId($location_id): void
    {
        $this->location_id = $location_id;
    }

    /**
     * @return mixed
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * @param mixed $organization_id
     */
    public function setOrganizationId($organization_id): void
    {
        $this->organization_id = $organization_id;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref): void
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return bool
     */
    public function isIsRefund(): bool
    {
        return $this->is_refund;
    }

    /**
     * @param bool $is_refund
     */
    public function setIsRefund(bool $is_refund): void
    {
        $this->is_refund = $is_refund;
    }

    /**
     * @return TransactionProduct[]|ArrayCollection
     */
    public function getTransactionProducts()
    {
        return $this->transaction_products;
    }

    /**
     * @param TransactionProduct[]|ArrayCollection $transaction_products
     */
    public function setTransactionProducts($transaction_products): void
    {
        $this->transaction_products = $transaction_products;
    }
}
