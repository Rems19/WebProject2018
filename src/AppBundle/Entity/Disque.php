<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disque
 *
 * @ORM\Table(name="Disque")
 * @ORM\Entity
 */
class Disque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Album", type="integer", nullable=false)
     */
    private $codeAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference_Album", type="string", length=200, nullable=false)
     */
    private $referenceAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference_Disque", type="string", length=50, nullable=true)
     */
    private $referenceDisque;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Disque", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDisque;


}

