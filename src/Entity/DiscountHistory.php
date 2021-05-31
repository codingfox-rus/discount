<?php

namespace App\Entity;

use App\Repository\DiscountHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DiscountHistoryRepository::class)
 */
class DiscountHistory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $location_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $date_begin;

    /**
     * @ORM\Column(type="integer")
     */
    private $date_end;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $price_discount;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $price_normal;

    /**
     * @ORM\Column(type="integer")
     */
    private $saved_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocationId(): ?int
    {
        return $this->location_id;
    }

    public function setLocationId(int $location_id): self
    {
        $this->location_id = $location_id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getDateBegin(): ?int
    {
        return $this->date_begin;
    }

    public function setDateBegin(int $date_begin): self
    {
        $this->date_begin = $date_begin;

        return $this;
    }

    public function getDateEnd(): ?int
    {
        return $this->date_end;
    }

    public function setDateEnd(int $date_end): self
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function getPriceDiscount(): ?string
    {
        return $this->price_discount;
    }

    public function setPriceDiscount(string $price_discount): self
    {
        $this->price_discount = $price_discount;

        return $this;
    }

    public function getPriceNormal(): ?string
    {
        return $this->price_normal;
    }

    public function setPriceNormal(string $price_normal): self
    {
        $this->price_normal = $price_normal;

        return $this;
    }

    public function getSavedAt(): ?int
    {
        return $this->saved_at;
    }

    public function setSavedAt(int $saved_at): self
    {
        $this->saved_at = $saved_at;

        return $this;
    }
}