<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instrument
 *
 * @ORM\Table(name="Instrument")
 * @ORM\Entity
 */
class Instrument
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Instrument", type="string", length=50, nullable=false)
     */
    private $nomInstrument;

    /**
     * @var binary
     *
     * @ORM\Column(name="Image", type="binary", nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrument", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInstrument;



    /**
     * Set nomInstrument
     *
     * @param string $nomInstrument
     *
     * @return Instrument
     */
    public function setNomInstrument($nomInstrument)
    {
        $this->nomInstrument = $nomInstrument;

        return $this;
    }

    /**
     * Get nomInstrument
     *
     * @return string
     */
    public function getNomInstrument()
    {
        return $this->nomInstrument;
    }

    /**
     * Set image
     *
     * @param binary $image
     *
     * @return Instrument
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return binary
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get codeInstrument
     *
     * @return integer
     */
    public function getCodeInstrument()
    {
        return $this->codeInstrument;
    }
}
