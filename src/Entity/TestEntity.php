<?php

namespace App\Entity;

use App\Repository\TestEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestEntityRepository::class)
 */
class TestEntity
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
    private $Dog;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lizard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDog(): ?string
    {
        return $this->Dog;
    }

    public function setDog(string $Dog): self
    {
        $this->Dog = $Dog;

        return $this;
    }

    public function getCat(): ?string
    {
        return $this->Cat;
    }

    public function setCat(string $Cat): self
    {
        $this->Cat = $Cat;

        return $this;
    }

    public function getLizard(): ?string
    {
        return $this->Lizard;
    }

    public function setLizard(string $Lizard): self
    {
        $this->Lizard = $Lizard;

        return $this;
    }
}
