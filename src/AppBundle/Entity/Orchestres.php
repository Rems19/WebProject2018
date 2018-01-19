<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orchestres
 *
 * @ORM\Table(name="Orchestres")
 * @ORM\Entity
 */
class Orchestres
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Orchestre", type="string", length=150, nullable=false)
     */
    private $nomOrchestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Orchestre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeOrchestre;



    /**
     * Set nomOrchestre
     *
     * @param string $nomOrchestre
     *
     * @return Orchestres
     */
    public function setNomOrchestre($nomOrchestre)
    {
        $this->nomOrchestre = $nomOrchestre;

        return $this;
    }

    /**
     * Get nomOrchestre
     *
     * @return string
     */
    public function getNomOrchestre()
    {
        return $this->nomOrchestre;
    }

    /**
     * Get codeOrchestre
     *
     * @return integer
     */
    public function getCodeOrchestre()
    {
        return $this->codeOrchestre;
    }
}
