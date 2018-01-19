<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table(name="Editeur")
 * @ORM\Entity
 */
class Editeur
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Editeur", type="string", length=50, nullable=false)
     */
    private $nomEditeur;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Pays", type="integer", nullable=true)
     */
    private $codePays;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Editeur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeEditeur;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Album", mappedBy="editeur")
     * @ORM\JoinColumn(name="Code_Editeur", referencedColumnName="Code_Editeur")
     */
    private $albums;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     */
    private $pays;

    /**
     * Set nomEditeur
     *
     * @param string $nomEditeur
     *
     * @return Editeur
     */
    public function setNomEditeur($nomEditeur)
    {
        $this->nomEditeur = $nomEditeur;

        return $this;
    }

    /**
     * Get nomEditeur
     *
     * @return string
     */
    public function getNomEditeur()
    {
        return $this->nomEditeur;
    }

    /**
     * Set codePays
     *
     * @param integer $codePays
     *
     * @return Editeur
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Get codePays
     *
     * @return integer
     */
    public function getCodePays()
    {
        return $this->codePays;
    }

    /**
     * Get codeEditeur
     *
     * @return integer
     */
    public function getCodeEditeur()
    {
        return $this->codeEditeur;
    }

    /**
     * @return mixed
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @return Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
