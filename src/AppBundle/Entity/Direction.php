<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direction
 *
 * @ORM\Table(name="Direction")
 * @ORM\Entity
 */
class Direction
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
     * @ORM\Column(name="Code_Morceau", type="integer", nullable=true)
     */
    private $codeMorceau;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Orchestre", type="integer", nullable=true)
     */
    private $codeOrchestre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Direction", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDirection;


}

