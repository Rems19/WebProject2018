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



    /**
     * Set codeEnregistrement
     *
     * @param integer $codeEnregistrement
     *
     * @return Achat
     */
    public function setCodeEnregistrement($codeEnregistrement)
    {
        $this->codeEnregistrement = $codeEnregistrement;

        return $this;
    }

    /**
     * Get codeEnregistrement
     *
     * @return integer
     */
    public function getCodeEnregistrement()
    {
        return $this->codeEnregistrement;
    }

    /**
     * Set codeAbonne
     *
     * @param integer $codeAbonne
     *
     * @return Achat
     */
    public function setCodeAbonne($codeAbonne)
    {
        $this->codeAbonne = $codeAbonne;

        return $this;
    }

    /**
     * Get codeAbonne
     *
     * @return integer
     */
    public function getCodeAbonne()
    {
        return $this->codeAbonne;
    }

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
}
