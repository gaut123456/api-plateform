<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity]
#[ORM\Table(name: "author")]
#[ApiResource]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private ?string $name = null;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private ?string $surname = null;

    #[ORM\Column(type: "integer", nullable: false)]
    private ?int $age = null;

    #[ORM\Column(type: "integer", nullable: false)]
    #[ORM\JoinColumn(name: "category_id", referencedColumnName: "id")]
    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: "id")]
    private ?int $categoryId = null;

    // #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: "authors")]
    // #[ORM\JoinColumn(name: "category_id", referencedColumnName: "id")]
    // private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

}
