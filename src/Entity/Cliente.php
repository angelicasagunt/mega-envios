<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
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
    private $nombre;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $apellido;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="integer")
     */
    private $dni;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cuenta", mappedBy="Cliente")
     */
    private $cuentas;

    public function __construct()
    {
        $this->cuentas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(?int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(int $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * @return Collection|Cuenta[]
     */
    public function getCuentas(): Collection
    {
        return $this->cuentas;
    }

    public function addCuenta(Cuenta $cuenta): self
    {
        if (!$this->cuentas->contains($cuenta)) {
            $this->cuentas[] = $cuenta;
            $cuenta->setCliente($this);
        }

        return $this;
    }

    public function removeCuenta(Cuenta $cuenta): self
    {
        if ($this->cuentas->contains($cuenta)) {
            $this->cuentas->removeElement($cuenta);
            // set the owning side to null (unless already changed)
            if ($cuenta->getCliente() === $this) {
                $cuenta->setCliente(null);
            }
        }

        return $this;
    }
}
