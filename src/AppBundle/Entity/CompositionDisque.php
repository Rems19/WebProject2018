<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionDisque
 *
 * @ORM\Table(name="Composition_Disque")
 * @ORM\Entity
 */
class CompositionDisque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Disque", type="integer", nullable=true)
     */
    private $codeDisque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Morceau", type="integer", nullable=true)
     */
    private $codeMorceau;

    /**
     * @var integer
     *
     * @ORM\Column(name="Position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Contenir", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeContenir;


}

