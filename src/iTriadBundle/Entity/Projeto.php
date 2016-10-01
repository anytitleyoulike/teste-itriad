<?php

namespace iTriadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projeto
 *
 * @ORM\Table(name="projeto", indexes={@ORM\Index(name="cliente_id", columns={"cliente_id"}), @ORM\Index(name="orcamento_id", columns={"orcamento_id"}), @ORM\Index(name="status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class Projeto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \iTriadBundle\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="iTriadBundle\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var \iTriadBundle\Entity\Orcamento
     *
     * @ORM\ManyToOne(targetEntity="iTriadBundle\Entity\Orcamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orcamento_id", referencedColumnName="id")
     * })
     */
    private $orcamento;

    /**
     * @var \iTriadBundle\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="iTriadBundle\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * })
     */
    private $cliente;



    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Projeto
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
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

    /**
     * Set status
     *
     * @param \iTriadBundle\Entity\Status $status
     *
     * @return Projeto
     */
    public function setStatus(\iTriadBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \iTriadBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set orcamento
     *
     * @param \iTriadBundle\Entity\Orcamento $orcamento
     *
     * @return Projeto
     */
    public function setOrcamento(\iTriadBundle\Entity\Orcamento $orcamento = null)
    {
        $this->orcamento = $orcamento;

        return $this;
    }

    /**
     * Get orcamento
     *
     * @return \iTriadBundle\Entity\Orcamento
     */
    public function getOrcamento()
    {
        return $this->orcamento;
    }

    /**
     * Set cliente
     *
     * @param \iTriadBundle\Entity\Cliente $cliente
     *
     * @return Projeto
     */
    public function setCliente(\iTriadBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \iTriadBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
