<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdersRepository::class)]
#[ApiResource(
    collectionOperations: [
        'get' => [
            'path' => '/orders'
        ],
        'post' => [
            'path' => '/order',
        ],
    ],
    itemOperations: [
        'get' => [
            'path' => '/order/{id}'
        ],
        'put' => [
            'path' => '/order/{id}'
        ],
        'delete' => [
            'path' => '/order/{id}'
        ],
    ],
)]
class Orders
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $idUser;

    #[ORM\Column(type: 'float')]
    private $totalPrice;

    #[ORM\Column(type: 'datetime')]
    private $date;

    #[ORM\Column(type: 'array')]
    private $Products = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getProducts(): ?array
    {
        return $this->Products;
    }

    public function setProducts(array $Products): self
    {
        $this->Products = $Products;

        return $this;
    }
}
