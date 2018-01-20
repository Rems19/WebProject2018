<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Driver\Statement;
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
     * @var Genre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Genre", inversedBy="albums")
     * @ORM\JoinColumn(name="Code_Genre", referencedColumnName="Code_Genre")
     */
    private $genre;

    /**
     * @var Editeur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Editeur", inversedBy="albums")
     * @ORM\JoinColumn(name="Code_Editeur", referencedColumnName="Code_Editeur")
     */
    private $editeur;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Disque", mappedBy="album", fetch="EAGER")
     * @ORM\JoinColumn(name="Code_Album", referencedColumnName="Code_Album")
     */
    private $disques;

    /**
     * Album constructor.
     */
    public function __construct()
    {
        $this->disques = new ArrayCollection();
    }


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
        return base64_encode(pack('H*', stream_get_contents($this->pochette)));
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
     * @param resource $pochette
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

    /**
     * @return Editeur
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * @return Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return Collection|Disque
     */
    public function getDisques()
    {
        return $this->disques;
    }

    /**
     * @param ManagerRegistry $doctrine
     * @return Musicien[]
     */
    public function getArtists(ManagerRegistry $doctrine)
    {
        /** @var Statement $stmt */
        $stmt = $doctrine->getConnection()->prepare(
            'SELECT DISTINCT m.Code_Musicien FROM Album a
             INNER JOIN Disque d ON d.Code_Album = a.Code_Album
             INNER JOIN Composition_Disque cd ON cd.Code_Disque = d.Code_Disque
             INNER JOIN Enregistrement e ON e.Code_Morceau = cd.Code_Morceau
             INNER JOIN Composition c ON c.Code_Composition = e.Code_Composition
             INNER JOIN Composition_Oeuvre co ON co.Code_Composition = c.Code_Composition
             INNER JOIN Oeuvre o ON o.Code_Oeuvre = co.Code_Oeuvre
             INNER JOIN Composer c2 ON c2.Code_Oeuvre = o.Code_Oeuvre
             INNER JOIN Musicien m ON m.Code_Musicien = c2.Code_Musicien
             WHERE a.Code_Album = :codeAlbum'
        );
        $stmt->execute(['codeAlbum' => $this->codeAlbum]);
        $musicienRepo = $doctrine->getRepository('AppBundle:Musicien');
        $musiciens = [];
        while ($code = $stmt->fetchColumn())
            $musiciens[] = $musicienRepo->find($code);
        return $musiciens;
    }
}
