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



    /**
     * Set codeMorceau
     *
     * @param integer $codeMorceau
     *
     * @return Interpreter
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
     * Set codeMusicien
     *
     * @param integer $codeMusicien
     *
     * @return Interpreter
     */
    public function setCodeMusicien($codeMusicien)
    {
        $this->codeMusicien = $codeMusicien;

        return $this;
    }

    /**
     * Get codeMusicien
     *
     * @return integer
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }

    /**
     * Set codeInstrument
     *
     * @param integer $codeInstrument
     *
     * @return Interpreter
     */
    public function setCodeInstrument($codeInstrument)
    {
        $this->codeInstrument = $codeInstrument;

        return $this;
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

    /**
     * Get codeInterpreter
     *
     * @return integer
     */
    public function getCodeInterpreter()
    {
        return $this->codeInterpreter;
    }
}
