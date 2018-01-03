<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionOeuvre
 *
 * @ORM\Table(name="Composition_Oeuvre")
 * @ORM\Entity
 */
class CompositionOeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer", nullable=true)
     */
    private $codeOeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composition", type="integer", nullable=true)
     */
    private $codeComposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer_Oeuvre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposerOeuvre;


}

