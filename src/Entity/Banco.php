<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BancoRepository")
 */
class Banco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $tipo;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Cuenta", mappedBy="Banco", cascade={"persist", "remove"})
     */
    private $cuenta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCuenta(): ?Cuenta
    {
        return $this->cuenta;
    }

    public function setCuenta(?Cuenta $cuenta): self
    {
        $this->cuenta = $cuenta;

        // set (or unset) the owning side of the relation if necessary
        $newBanco = null === $cuenta ? null : $this;
        if ($cuenta->getBanco() !== $newBanco) {
            $cuenta->setBanco($newBanco);
        }

        return $this;
    }
}
