<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="Album")
 * @ORM\Entity
 */
class Album
{
    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Album", type="string", length=400, nullable=false)
     */
    private $titreAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee_Album", type="integer", nullable=true)
     */
    private $anneeAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Genre", type="integer", nullable=true)
     */
    private $codeGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Editeur", type="integer", nullable=true)
     */
    private $codeEditeur;

    /**
     * @var resource
     *
     * @ORM\Column(name="Pochette", type="binary", nullable=true)
     */
    private $pochette;

    /**
     * @var string
     *
     * @ORM\Column(name="ASIN", type="string", length=20, nullable=true)
     */
    private $asin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Album", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAlbum;

    /**
     * @return string
     */
    public function getTitreAlbum()
    {
        return $this->titreAlbum;
    }

    /**
     * @return int
     */
    public function getAnneeAlbum()
    {
        return $this->anneeAlbum;
    }

    /**
     * @return int
     */
    public function getCodeGenre()
    {
        return $this->codeGenre;
    }

    /**
     * @return int
     */
    public function getCodeEditeur()
    {
        return $this->codeEditeur;
    }

    /**
     * @return string
     */
    public function getPochette()
    {
        return base64_encode(stream_get_contents($this->pochette));
    }

    /**
     * @return string
     */
    public function getAsin()
    {
        return $this->asin;
    }

    /**
     * @return int
     */
    public function getCodeAlbum()
    {
        return $this->codeAlbum;
    }


    /**
     * Set titreAlbum
     *
     * @param string $titreAlbum
     *
     * @return Album
     */
    public function setTitreAlbum($titreAlbum)
    {
        $this->titreAlbum = $titreAlbum;

        return $this;
    }

    /**
     * Set anneeAlbum
     *
     * @param integer $anneeAlbum
     *
     * @return Album
     */
    public function setAnneeAlbum($anneeAlbum)
    {
        $this->anneeAlbum = $anneeAlbum;

        return $this;
    }

    /**
     * Set codeGenre
     *
     * @param integer $codeGenre
     *
     * @return Album
     */
    public function setCodeGenre($codeGenre)
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    /**
     * Set codeEditeur
     *
     * @param integer $codeEditeur
     *
     * @return Album
     */
    public function setCodeEditeur($codeEditeur)
    {
        $this->codeEditeur = $codeEditeur;

        return $this;
    }

    /**
     * Set pochette
     *
     * @param binary $pochette
     *
     * @return Album
     */
    public function setPochette($pochette)
    {
        $this->pochette = $pochette;

        return $this;
    }

    /**
     * Set asin
     *
     * @param string $asin
     *
     * @return Album
     */
    public function setAsin($asin)
    {
        $this->asin = $asin;

        return $this;
    }
}
