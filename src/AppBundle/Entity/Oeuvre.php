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


}

