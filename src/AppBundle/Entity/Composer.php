<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composer
 *
 * @ORM\Table(name="Composer")
 * @ORM\Entity
 */
class Composer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Musicien", type="integer", nullable=true)
     */
    private $codeMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer", nullable=true)
     */
    private $codeOeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposer;

    /**
     * @var Musicien
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Musicien", inversedBy="compositions")
     * @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     */
    private $musicien;

    /**
     * @var Oeuvre
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Oeuvre", mappedBy="composer")
     * @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     */
    private $oeuvre;

    /**
     * @return Musicien
     */
    public function getMusicien()
    {
        return $this->musicien;
    }

    /**
     * @return int
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }



    /**
     * Set codeMusicien
     *
     * @param integer $codeMusicien
     *
     * @return Composer
     */
    public function setCodeMusicien($codeMusicien)
    {
        $this->codeMusicien = $codeMusicien;

        return $this;
    }

    /**
     * Set codeOeuvre
     *
     * @param integer $codeOeuvre
     *
     * @return Composer
     */
    public function setCodeOeuvre($codeOeuvre)
    {
        $this->codeOeuvre = $codeOeuvre;

        return $this;
    }

    /**
     * Get codeOeuvre
     *
     * @return integer
     */
    public function getCodeOeuvre()
    {
        return $this->codeOeuvre;
    }

    /**
     * Get codeComposer
     *
     * @return integer
     */
    public function getCodeComposer()
    {
        return $this->codeComposer;
    }

    /**
     * Set musicien
     *
     * @param Musicien $musicien
     *
     * @return Composer
     */
    public function setMusicien(Musicien $musicien = null)
    {
        $this->musicien = $musicien;

        return $this;
    }

    /**
     * @return Oeuvre
     */
    public function getOeuvre()
    {
        return $this->oeuvre;
    }
}
