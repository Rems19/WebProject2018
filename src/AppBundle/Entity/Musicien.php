<?php

namespace AppBundle\Entity;

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
     * @var binary
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


}

