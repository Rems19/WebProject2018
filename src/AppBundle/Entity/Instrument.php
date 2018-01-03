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


}

