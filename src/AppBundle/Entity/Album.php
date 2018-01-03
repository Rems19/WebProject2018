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
     * @var binary
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


}

