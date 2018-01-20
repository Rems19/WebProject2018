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

    /**
     * @var Album
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Album", inversedBy="disques")
     * @ORM\JoinColumn(name="Code_Album", referencedColumnName="Code_Album")
     */
    private $album;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CompositionDisque", mappedBy="disque")
     * @ORM\JoinColumn(name="Code_Disque", referencedColumnName="Code_Disque")
     */
    private $compositionsDisque;

    /**
     * Set codeAlbum
     *
     * @param integer $codeAlbum
     *
     * @return Disque
     */
    public function setCodeAlbum($codeAlbum)
    {
        $this->codeAlbum = $codeAlbum;

        return $this;
    }

    /**
     * Get codeAlbum
     *
     * @return integer
     */
    public function getCodeAlbum()
    {
        return $this->codeAlbum;
    }

    /**
     * Set referenceAlbum
     *
     * @param string $referenceAlbum
     *
     * @return Disque
     */
    public function setReferenceAlbum($referenceAlbum)
    {
        $this->referenceAlbum = $referenceAlbum;

        return $this;
    }

    /**
     * Get referenceAlbum
     *
     * @return string
     */
    public function getReferenceAlbum()
    {
        return $this->referenceAlbum;
    }

    /**
     * Set referenceDisque
     *
     * @param string $referenceDisque
     *
     * @return Disque
     */
    public function setReferenceDisque($referenceDisque)
    {
        $this->referenceDisque = $referenceDisque;

        return $this;
    }

    /**
     * Get referenceDisque
     *
     * @return string
     */
    public function getReferenceDisque()
    {
        return $this->referenceDisque;
    }

    /**
     * Get codeDisque
     *
     * @return integer
     */
    public function getCodeDisque()
    {
        return $this->codeDisque;
    }

    /**
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @return mixed
     */
    public function getCompositionsDisque()
    {
        return $this->compositionsDisque;
    }
}
