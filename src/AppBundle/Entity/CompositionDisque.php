<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionDisque
 *
 * @ORM\Table(name="Composition_Disque")
 * @ORM\Entity
 */
class CompositionDisque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Disque", type="integer", nullable=true)
     */
    private $codeDisque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Morceau", type="integer", nullable=true)
     */
    private $codeMorceau;

    /**
     * @var integer
     *
     * @ORM\Column(name="Position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Contenir", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeContenir;

    /**
     * @var Disque
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Disque", inversedBy="compositions")
     * @ORM\JoinColumn(name="Code_Disque", referencedColumnName="Code_Disque")
     */
    private $disque;

    /**
     * @var Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enregistrement")
     * @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     */
    private $enregistrement;

    /**
     * Set codeDisque
     *
     * @param integer $codeDisque
     *
     * @return CompositionDisque
     */
    public function setCodeDisque($codeDisque)
    {
        $this->codeDisque = $codeDisque;

        return $this;
    }

    /**
     * Get codeDisque
     *
     * @return integer
     */
    public function getCodeDisque()
    {
        return $this->codeDisque;
    }

    /**
     * Set codeMorceau
     *
     * @param integer $codeMorceau
     *
     * @return CompositionDisque
     */
    public function setCodeMorceau($codeMorceau)
    {
        $this->codeMorceau = $codeMorceau;

        return $this;
    }

    /**
     * Get codeMorceau
     *
     * @return integer
     */
    public function getCodeMorceau()
    {
        return $this->codeMorceau;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return CompositionDisque
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Get codeContenir
     *
     * @return integer
     */
    public function getCodeContenir()
    {
        return $this->codeContenir;
    }

    /**
     * @return Disque
     */
    public function getDisque()
    {
        return $this->disque;
    }

    /**
     * @return Disque
     */
    public function getEnregistrement()
    {
        return $this->enregistrement;
    }
}
