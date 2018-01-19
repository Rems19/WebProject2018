<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="Oeuvre")
 * @ORM\Entity
 */
class Oeuvre
{
    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Oeuvre", type="string", length=200, nullable=false)
     */
    private $titreOeuvre;

    /**
     * @var string
     *
     * @ORM\Column(name="Sous_Titre", type="string", length=200, nullable=true)
     */
    private $sousTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="Tonalite", type="string", length=40, nullable=true)
     */
    private $tonalite;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Type", type="integer", nullable=true)
     */
    private $codeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Opus", type="string", length=40, nullable=true)
     */
    private $opus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero_Opus", type="integer", nullable=true)
     */
    private $numeroOpus;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeOeuvre;

    /**
     * @var Composer
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Composer", inversedBy="oeuvre")
     * @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     */
    private $composer;

    /**
     * @var TypeMorceaux
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeMorceaux")
     * @ORM\JoinColumn(name="Code_Type", referencedColumnName="Code_Type")
     */
    private $type;

    /**
     * Set titreOeuvre
     *
     * @param string $titreOeuvre
     *
     * @return Oeuvre
     */
    public function setTitreOeuvre($titreOeuvre)
    {
        $this->titreOeuvre = $titreOeuvre;

        return $this;
    }

    /**
     * Get titreOeuvre
     *
     * @return string
     */
    public function getTitreOeuvre()
    {
        return $this->titreOeuvre;
    }

    /**
     * Set sousTitre
     *
     * @param string $sousTitre
     *
     * @return Oeuvre
     */
    public function setSousTitre($sousTitre)
    {
        $this->sousTitre = $sousTitre;

        return $this;
    }

    /**
     * Get sousTitre
     *
     * @return string
     */
    public function getSousTitre()
    {
        return $this->sousTitre;
    }

    /**
     * Set tonalite
     *
     * @param string $tonalite
     *
     * @return Oeuvre
     */
    public function setTonalite($tonalite)
    {
        $this->tonalite = $tonalite;

        return $this;
    }

    /**
     * Get tonalite
     *
     * @return string
     */
    public function getTonalite()
    {
        return $this->tonalite;
    }

    /**
     * Set codeType
     *
     * @param integer $codeType
     *
     * @return Oeuvre
     */
    public function setCodeType($codeType)
    {
        $this->codeType = $codeType;

        return $this;
    }

    /**
     * Get codeType
     *
     * @return integer
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Oeuvre
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set opus
     *
     * @param string $opus
     *
     * @return Oeuvre
     */
    public function setOpus($opus)
    {
        $this->opus = $opus;

        return $this;
    }

    /**
     * Get opus
     *
     * @return string
     */
    public function getOpus()
    {
        return $this->opus;
    }

    /**
     * Set numeroOpus
     *
     * @param integer $numeroOpus
     *
     * @return Oeuvre
     */
    public function setNumeroOpus($numeroOpus)
    {
        $this->numeroOpus = $numeroOpus;

        return $this;
    }

    /**
     * Get numeroOpus
     *
     * @return integer
     */
    public function getNumeroOpus()
    {
        return $this->numeroOpus;
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
     * @return Composer
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * @return TypeMorceaux
     */
    public function getType()
    {
        return $this->type;
    }
}
