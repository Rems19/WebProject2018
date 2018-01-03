<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instrumentation
 *
 * @ORM\Table(name="Instrumentation")
 * @ORM\Entity
 */
class Instrumentation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer", nullable=true)
     */
    private $codeOeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrument", type="integer", nullable=true)
     */
    private $codeInstrument;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrumentation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInstrumentation;


}

