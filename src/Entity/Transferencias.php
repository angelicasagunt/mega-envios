<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransferenciasRepository")
 */
class Transferencias
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="integer")
     */
    private $importe_titular;

    /**
     * @ORM\Column(type="integer")
     */
    private $cuenta;

    /**
     * @ORM\Column(type="integer")
     */
    private $importe_cliente;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $medio_de_pago;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Cuenta", inversedBy="transferencias", cascade={"persist", "remove"})
     */
    private $Cuenta;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getImporteTitular(): ?int
    {
        return $this->importe_titular;
    }

    public function setImporteTitular(int $importe_titular): self
    {
        $this->importe_titular = $importe_titular;

        return $this;
    }

    public function getCuenta(): ?int
    {
        return $this->cuenta;
    }

    public function setCuenta(int $cuenta): self
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    public function getImporteCliente(): ?int
    {
        return $this->importe_cliente;
    }

    public function setImporteCliente(int $importe_cliente): self
    {
        $this->importe_cliente = $importe_cliente;

        return $this;
    }

    public function getMedioDePago(): ?string
    {
        return $this->medio_de_pago;
    }

    public function setMedioDePago(string $medio_de_pago): self
    {
        $this->medio_de_pago = $medio_de_pago;

        return $this;
    }
}
