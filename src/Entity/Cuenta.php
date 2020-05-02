<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CuentaRepository")
 */
class Cuenta
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cliente;

    /**
     * @ORM\Column(type="integer")
     */
    private $banco;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_cuenta;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $nombre_titular;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $apellido_titular;

    /**
     * @ORM\Column(type="integer")
     */
    private $cedula;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\cliente", inversedBy="cuentas")
     */
    private $Cliente;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Banco", inversedBy="cuenta", cascade={"persist", "remove"})
     */
    private $Banco;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Transferencias", mappedBy="Cuenta", cascade={"persist", "remove"})
     */
    private $transferencias;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCliente(): ?int
    {
        return $this->cliente;
    }

    public function setCliente(int $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getBanco(): ?int
    {
        return $this->banco;
    }

    public function setBanco(int $banco): self
    {
        $this->banco = $banco;

        return $this;
    }

    public function getNumCuenta(): ?int
    {
        return $this->num_cuenta;
    }

    public function setNumCuenta(int $num_cuenta): self
    {
        $this->num_cuenta = $num_cuenta;

        return $this;
    }

    public function getNombreTitular(): ?string
    {
        return $this->nombre_titular;
    }

    public function setNombreTitular(string $nombre_titular): self
    {
        $this->nombre_titular = $nombre_titular;

        return $this;
    }

    public function getApellidoTitular(): ?string
    {
        return $this->apellido_titular;
    }

    public function setApellidoTitular(?string $apellido_titular): self
    {
        $this->apellido_titular = $apellido_titular;

        return $this;
    }

    public function getCedula(): ?int
    {
        return $this->cedula;
    }

    public function setCedula(int $cedula): self
    {
        $this->cedula = $cedula;

        return $this;
    }

    public function getTransferencias(): ?Transferencias
    {
        return $this->transferencias;
    }

    public function setTransferencias(?Transferencias $transferencias): self
    {
        $this->transferencias = $transferencias;

        // set (or unset) the owning side of the relation if necessary
        $newCuenta = null === $transferencias ? null : $this;
        if ($transferencias->getCuenta() !== $newCuenta) {
            $transferencias->setCuenta($newCuenta);
        }

        return $this;
    }
}
