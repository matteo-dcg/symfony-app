<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
#[ApiResource(
    collectionOperations: [
        'get' => [
            'path' => '/cart'
        ],
        'post' => [
            'path' => '/cart',
        ],
    ],
    itemOperations: [
        'get' => [
            'path' => '/cart/{id}'
        ],
        'patch' => [
            'path' => '/cart/{id}'
        ],
        'put' => [
            'path' => '/cart/validate'
        ],
        'delete' => [
            'path' => '/cart/{id}'
        ],
    ],
)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'array')]
    private $listProducts = [];

    #[ORM\Column(type: 'boolean')]
    private $isValidated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getListProducts(): ?array
    {
        return $this->listProducts;
    }

    public function setListProducts(array $listProducts): self
    {
        $this->listProducts = $listProducts;

        return $this;
    }

    public function getIsValidated(): ?bool
    {
        return $this->isValidated;
    }

    public function setIsValidated(bool $isValidated): self
    {
        $this->isValidated = $isValidated;

        return $this;
    }
}
