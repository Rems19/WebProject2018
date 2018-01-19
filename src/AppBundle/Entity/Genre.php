<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table(name="Genre")
 * @ORM\Entity
 */
class Genre
{
    /**
     * @var string
     *
     * @ORM\Column(name="Libelle_Abrege", type="string", length=60, nullable=false)
     */
    private $libelleAbrege;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Genre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeGenre;



    /**
     * Set libelleAbrege
     *
     * @param string $libelleAbrege
     *
     * @return Genre
     */
    public function setLibelleAbrege($libelleAbrege)
    {
        $this->libelleAbrege = $libelleAbrege;

        return $this;
    }

    /**
     * Get libelleAbrege
     *
     * @return string
     */
    public function getLibelleAbrege()
    {
        return $this->libelleAbrege;
    }

    /**
     * Get codeGenre
     *
     * @return integer
     */
    public function getCodeGenre()
    {
        return $this->codeGenre;
    }
}
