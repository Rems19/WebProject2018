<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enregistrement
 *
 * @ORM\Table(name="Enregistrement")
 * @ORM\Entity
 */
class Enregistrement
{
    /**
     * @var string
     *
     * @ORM\Column(name="Titre", type="string", length=0, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composition", type="integer", nullable=false)
     */
    private $codeComposition;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_de_Fichier", type="string", length=0, nullable=false)
     */
    private $nomDeFichier;

    /**
     * @var string
     *
     * @ORM\Column(name="Duree", type="string", length=10, nullable=true)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="Duree_Seconde", type="integer", nullable=true)
     */
    private $dureeSeconde;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var binary
     *
     * @ORM\Column(name="Extrait", type="binary", nullable=true)
     */
    private $extrait;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Morceau", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeMorceau;


}

