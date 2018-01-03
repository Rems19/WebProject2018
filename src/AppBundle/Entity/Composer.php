<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composer
 *
 * @ORM\Table(name="Composer")
 * @ORM\Entity
 */
class Composer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Musicien", type="integer", nullable=true)
     */
    private $codeMusicien;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer", nullable=true)
     */
    private $codeOeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposer;


}

