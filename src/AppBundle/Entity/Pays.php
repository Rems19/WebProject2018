<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="Pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Pays", type="string", length=50, nullable=true)
     */
    private $nomPays;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Pays", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePays;

    /**
     * @return string
     */
    public function getRawNomPays()
    {
        return $this->nomPays;
    }

    /**
     * @return string
     */
    public function getNomPays()
    {
        return trim($this->getRawNomPays());
    }

    /**
     * @return int
     */
    public function getCodePays()
    {
        return $this->codePays;
    }



    /**
     * Set nomPays
     *
     * @param string $nomPays
     *
     * @return Pays
     */
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }
}
