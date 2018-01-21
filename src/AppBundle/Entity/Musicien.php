<?php

namespace AppBundle\Entity;

use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\ORM\Mapping as ORM;

/**
 * Musicien
 *
 * @ORM\Table(name="Musicien")
 * @ORM\Entity
 */
class Musicien
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Musicien", type="string", length=200, nullable=false)
     */
    private $nomMusicien;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Musicien", type="string", length=50, nullable=true)
     */
    private $prenomMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee_Naissance", type="integer", nullable=true)
     */
    private $anneeNaissance;

    /**
     * @var integer
     *
     * @ORM\Column(name="Annee_Mort", type="integer", nullable=true)
     */
    private $anneeMort;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Pays", type="integer", nullable=true)
     */
    private $codePays;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Genre", type="integer", nullable=true)
     */
    private $codeGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrument", type="integer", nullable=true)
     */
    private $codeInstrument;

    /**
     * @var resource
     *
     * @ORM\Column(name="Photo", type="binary", nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Musicien", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeMusicien;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     */
    private $pays;

    /**
     * @var Genre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Genre", inversedBy="musiciens")
     * @ORM\JoinColumn(name="Code_Genre", referencedColumnName="Code_Genre")
     */
    private $genre;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Composer", mappedBy="musicien")
     * @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     */
    private $compositions;

    /**
     * @var Instrument
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Instrument")
     * @ORM\JoinColumn(name="Code_Instrument", referencedColumnName="Code_Instrument")
     */
    private $instrument;

    /**
     * @return string
     */
    public function getNomMusicien()
    {
        return $this->nomMusicien;
    }

    /**
     * @return string
     */
    public function getPrenomMusicien()
    {
        return $this->prenomMusicien;
    }

    /**
     * @return int
     */
    public function getAnneeNaissance()
    {
        return $this->anneeNaissance;
    }

    /**
     * @return int
     */
    public function getAnneeMort()
    {
        return $this->anneeMort;
    }

    /**
     * @return int
     */
    public function getCodePays()
    {
        return $this->codePays;
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
    public function getCodeInstrument()
    {
        return $this->codeInstrument;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo != null ? base64_encode(stream_get_contents($this->photo)) : null;
    }

    /**
     * @return int
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }

    /**
     * Set nomMusicien
     *
     * @param string $nomMusicien
     *
     * @return Musicien
     */
    public function setNomMusicien($nomMusicien)
    {
        $this->nomMusicien = $nomMusicien;

        return $this;
    }

    /**
     * Set prenomMusicien
     *
     * @param string $prenomMusicien
     *
     * @return Musicien
     */
    public function setPrenomMusicien($prenomMusicien)
    {
        $this->prenomMusicien = $prenomMusicien;

        return $this;
    }

    /**
     * Set anneeNaissance
     *
     * @param integer $anneeNaissance
     *
     * @return Musicien
     */
    public function setAnneeNaissance($anneeNaissance)
    {
        $this->anneeNaissance = $anneeNaissance;

        return $this;
    }

    /**
     * Set anneeMort
     *
     * @param integer $anneeMort
     *
     * @return Musicien
     */
    public function setAnneeMort($anneeMort)
    {
        $this->anneeMort = $anneeMort;

        return $this;
    }

    /**
     * Set codePays
     *
     * @param integer $codePays
     *
     * @return Musicien
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Set codeGenre
     *
     * @param integer $codeGenre
     *
     * @return Musicien
     */
    public function setCodeGenre($codeGenre)
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    /**
     * Set codeInstrument
     *
     * @param integer $codeInstrument
     *
     * @return Musicien
     */
    public function setCodeInstrument($codeInstrument)
    {
        $this->codeInstrument = $codeInstrument;

        return $this;
    }

    /**
     * Set photo
     *
     * @param resource $photo
     *
     * @return Musicien
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompositions()
    {
        return $this->compositions;
    }

    /**
     * @return Pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @return Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return Instrument
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * @param ManagerRegistry $doctrine
     * @return Album[]
     */
    public function getAlbums(ManagerRegistry $doctrine)
    {
        /** @var Statement $stmt */
        $stmt = $doctrine->getConnection()->prepare(
            'SELECT DISTINCT a.Code_Album FROM Musicien m
             INNER JOIN Composer c ON c.Code_Musicien= m.Code_Musicien
             INNER JOIN Oeuvre o ON o.Code_Oeuvre= c.Code_Oeuvre
             INNER JOIN Composition_Oeuvre co ON co.Code_Oeuvre = o.Code_Oeuvre
             INNER JOIN Composition c2 ON c2.Code_Composition = co.Code_Composition
             INNER JOIN Enregistrement e ON e.Code_Composition = c2.Code_Composition
             INNER JOIN Composition_Disque cd ON cd.Code_Morceau = e.Code_Morceau
             INNER JOIN Disque d ON d.Code_Disque = cd.Code_Disque
             INNER JOIN Album a ON a.Code_Album = d.Code_Album
             WHERE m.Code_Musicien = :codeMusicien'
        );
        $stmt->execute(['codeMusicien' => $this->codeMusicien]);
        $albumRepo = $doctrine->getRepository('AppBundle:Album');
        $albums = $albumRepo->findByCodeAlbum($stmt->fetchAll(\PDO::FETCH_COLUMN));
        return $albums;
    }
}
