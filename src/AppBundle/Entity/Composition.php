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


}

