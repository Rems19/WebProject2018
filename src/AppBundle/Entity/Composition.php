<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composition
 *
 * @ORM\Table(name="Composition")
 * @ORM\Entity
 */
class Composition
{
    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Composition", type="string", length=0, nullable=false)
     */
    private $titreComposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Composante_Composition", type="string", length=0, nullable=true)
     */
    private $composanteComposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composition", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposition;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Enregistrement", mappedBy="composition")
     * @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     */
    private $enregistrements;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CompositionOeuvre", mappedBy="composition")
     * @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     */
    private $compositionsOeuvres;

    /**
     * Set titreComposition
     *
     * @param string $titreComposition
     *
     * @return Composition
     */
    public function setTitreComposition($titreComposition)
    {
        $this->titreComposition = $titreComposition;

        return $this;
    }

    /**
     * Get titreComposition
     *
     * @return string
     */
    public function getTitreComposition()
    {
        return $this->titreComposition;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     *
     * @return Composition
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
     * Set composanteComposition
     *
     * @param string $composanteComposition
     *
     * @return Composition
     */
    public function setComposanteComposition($composanteComposition)
    {
        $this->composanteComposition = $composanteComposition;

        return $this;
    }

    /**
     * Get composanteComposition
     *
     * @return string
     */
    public function getComposanteComposition()
    {
        return $this->composanteComposition;
    }

    /**
     * Get codeComposition
     *
     * @return integer
     */
    public function getCodeComposition()
    {
        return $this->codeComposition;
    }

    /**
     * @return mixed
     */
    public function getEnregistrements()
    {
        return $this->enregistrements;
    }

    /**
     * @return mixed
     */
    public function getCompositionsOeuvres()
    {
        return $this->compositionsOeuvres;
    }
}
