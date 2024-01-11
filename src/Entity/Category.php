<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity]
#[ORM\Table(name: "category")]
#[ApiResource]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryName(): ?string
    {
        return $this->name;
    }

    public function setCategoryName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
