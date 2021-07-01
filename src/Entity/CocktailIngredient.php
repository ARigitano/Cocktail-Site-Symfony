<?php

namespace App\Entity;

use App\Repository\CocktailIngredientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CocktailIngredientRepository::class)
 */
class CocktailIngredient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="smallint")
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $have;

    /**
     * @ORM\ManyToOne(targetEntity=CocktailRecipe::class, inversedBy="ingredients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cocktailRecipe;

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

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getHave(): ?bool
    {
        return $this->have;
    }

    public function setHave(bool $have): self
    {
        $this->have = $have;

        return $this;
    }

    public function getCocktailRecipe(): ?CocktailRecipe
    {
        return $this->cocktailRecipe;
    }

    public function setCocktailRecipe(?CocktailRecipe $cocktailRecipe): self
    {
        $this->cocktailRecipe = $cocktailRecipe;

        return $this;
    }
}
