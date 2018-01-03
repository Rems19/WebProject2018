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


}

