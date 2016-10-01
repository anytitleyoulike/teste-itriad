<?php

namespace iTriadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orcamento
 *
 * @ORM\Table(name="orcamento")
 * @ORM\Entity
 */
class Orcamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="valor_planejado", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $valorPlanejado;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_gasto", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valorGasto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function __toString()
    {
        return strval($this->id);
    }

    /**
     * Set valorPlanejado
     *
     * @param string $valorPlanejado
     *
     * @return Orcamento
     */
    public function setValorPlanejado($valorPlanejado)
    {
        $this->valorPlanejado = $valorPlanejado;

        return $this;
    }

    /**
     * Get valorPlanejado
     *
     * @return string
     */
    public function getValorPlanejado()
    {
        return $this->valorPlanejado;
    }

    /**
     * Set valorGasto
     *
     * @param string $valorGasto
     *
     * @return Orcamento
     */
    public function setValorGasto($valorGasto)
    {
        $this->valorGasto = $valorGasto;

        return $this;
    }

    /**
     * Get valorGasto
     *
     * @return string
     */
    public function getValorGasto()
    {
        return $this->valorGasto;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
