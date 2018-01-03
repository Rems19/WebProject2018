<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="Achat")
 * @ORM\Entity
 */
class Achat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Enregistrement", type="integer", nullable=true)
     */
    private $codeEnregistrement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Abonne", type="integer", nullable=true)
     */
    private $codeAbonne;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Achat_Confirme", type="boolean", nullable=true)
     */
    private $achatConfirme;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Achat", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAchat;


}

