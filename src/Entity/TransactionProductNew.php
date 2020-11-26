<?php

namespace App\Entity;

use App\Repository\TransactionProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TransactionProductRepository::class)
 */
class TransactionProductNew
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $transaction_product_id;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $product_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $barcode;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $price;

    /**
     * @ORM\Column(type="decimal", precision=11, scale=3)
     */
    private $quantity;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $unit_type;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $transaction_id;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $trans_id;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var integer
     */
    private $status = 2;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $time;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $pos_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $pos_name;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $location_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $location_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var integer|null
     */
    private $organization_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $organization_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var integer|null
     */
    private $ref;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var integer|null
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $user_name;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @var boolean|null
     */
    private $is_refund;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTransactionProductId(): int
    {
        return $this->transaction_product_id;
    }

    /**
     * @param int $transaction_product_id
     */
    public function setTransactionProductId(int $transaction_product_id): void
    {
        $this->transaction_product_id = $transaction_product_id;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
     */
    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string|null $barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getUnitType(): int
    {
        return $this->unit_type;
    }

    /**
     * @param int $unit_type
     */
    public function setUnitType(int $unit_type): void
    {
        $this->unit_type = $unit_type;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transaction_id;
    }

    /**
     * @param int $transaction_id
     */
    public function setTransactionId(int $transaction_id): void
    {
        $this->transaction_id = $transaction_id;
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
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
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
     * @return int
     */
    public function getPosId(): int
    {
        return $this->pos_id;
    }

    /**
     * @param int $pos_id
     */
    public function setPosId(int $pos_id): void
    {
        $this->pos_id = $pos_id;
    }

    /**
     * @return string|null
     */
    public function getPosName(): ?string
    {
        return $this->pos_name;
    }

    /**
     * @param string|null $pos_name
     */
    public function setPosName(?string $pos_name): void
    {
        $this->pos_name = $pos_name;
    }

    /**
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->location_id;
    }

    /**
     * @param int $location_id
     */
    public function setLocationId(int $location_id): void
    {
        $this->location_id = $location_id;
    }

    /**
     * @return string|null
     */
    public function getLocationName(): ?string
    {
        return $this->location_name;
    }

    /**
     * @param string|null $location_name
     */
    public function setLocationName(?string $location_name): void
    {
        $this->location_name = $location_name;
    }

    /**
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
    }

    /**
     * @param int|null $organization_id
     */
    public function setOrganizationId(?int $organization_id): void
    {
        $this->organization_id = $organization_id;
    }

    /**
     * @return string|null
     */
    public function getOrganizationName(): ?string
    {
        return $this->organization_name;
    }

    /**
     * @param string|null $organization_name
     */
    public function setOrganizationName(?string $organization_name): void
    {
        $this->organization_name = $organization_name;
    }

    /**
     * @return int|null
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * @param int|null $ref
     */
    public function setRef(?int $ref): void
    {
        $this->ref = $ref;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * @param int|null $user_id
     */
    public function setUserId(?int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    /**
     * @param string|null $user_name
     */
    public function setUserName(?string $user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return bool|null
     */
    public function getIsRefund(): ?bool
    {
        return $this->is_refund;
    }

    /**
     * @param bool|null $is_refund
     */
    public function setIsRefund(?bool $is_refund): void
    {
        $this->is_refund = $is_refund;
    }
}
