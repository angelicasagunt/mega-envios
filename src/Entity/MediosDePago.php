medio<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MediosDePagoRepository")
 */
class MediosDePago
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
    private $medio_de_pago;

    public function getId(): ?int
    {
        return $this->id;
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
