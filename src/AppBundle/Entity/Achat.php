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

    /**
     * @var Abonne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Abonne", inversedBy="achats")
     * @ORM\JoinColumn(name="Code_Abonne", referencedColumnName="Code_Abonne")
     */
    private $abonne;

    /**
     * @var Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enregistrement")
     * @ORM\JoinColumn(name="Code_Enregistrement", referencedColumnName="Code_Morceau")
     */
    private $enregistrement;

    /**
     * Set achatConfirme
     *
     * @param boolean $achatConfirme
     *
     * @return Achat
     */
    public function setAchatConfirme($achatConfirme)
    {
        $this->achatConfirme = $achatConfirme;

        return $this;
    }

    /**
     * Get achatConfirme
     *
     * @return boolean
     */
    public function getAchatConfirme()
    {
        return $this->achatConfirme;
    }

    /**
     * Get codeAchat
     *
     * @return integer
     */
    public function getCodeAchat()
    {
        return $this->codeAchat;
    }

    /**
     * @return Abonne
     */
    public function getAbonne()
    {
        return $this->abonne;
    }

    /**
     * @return Enregistrement
     */
    public function getEnregistrement()
    {
        return $this->enregistrement;
    }

    /**
     * @param Abonne $abonne
     */
    public function setAbonne(Abonne $abonne)
    {
        $this->abonne = $abonne;
    }

    /**
     * @param Enregistrement $enregistrement
     */
    public function setEnregistrement(Enregistrement $enregistrement)
    {
        $this->enregistrement = $enregistrement;
    }


}
