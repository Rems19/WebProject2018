<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interpreter
 *
 * @ORM\Table(name="Interpreter")
 * @ORM\Entity
 */
class Interpreter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Morceau", type="integer", nullable=true)
     */
    private $codeMorceau;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Musicien", type="integer", nullable=true)
     */
    private $codeMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrument", type="integer", nullable=true)
     */
    private $codeInstrument;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Interpreter", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInterpreter;


}

