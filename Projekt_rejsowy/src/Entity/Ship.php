<?php

namespace App\Entity;

use App\Repository\ShipRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShipRepository::class)]
class Ship
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'ship', targetEntity: Cruise::class)]
    private Collection $cruises;

    public function __construct()
    {
        $this->cruises = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): static
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Cruise>
     */
    public function getCruises(): Collection
    {
        return $this->cruises;
    }

    public function addCruise(Cruise $cruise): static
    {
        if (!$this->cruises->contains($cruise)) {
            $this->cruises->add($cruise);
            $cruise->setShip($this);
        }

        return $this;
    }

    public function removeCruise(Cruise $cruise): static
    {
        if ($this->cruises->removeElement($cruise)) {
            // set the owning side to null (unless already changed)
            if ($cruise->getShip() === $this) {
                $cruise->setShip(null);
            }
        }

        return $this;
    }
}
