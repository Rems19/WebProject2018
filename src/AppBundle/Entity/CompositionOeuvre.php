<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionOeuvre
 *
 * @ORM\Table(name="Composition_Oeuvre")
 * @ORM\Entity
 */
class CompositionOeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Oeuvre", type="integer", nullable=true)
     */
    private $codeOeuvre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composition", type="integer", nullable=true)
     */
    private $codeComposition;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer_Oeuvre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposerOeuvre;



    /**
     * Set codeOeuvre
     *
     * @param integer $codeOeuvre
     *
     * @return CompositionOeuvre
     */
    public function setCodeOeuvre($codeOeuvre)
    {
        $this->codeOeuvre = $codeOeuvre;

        return $this;
    }

    /**
     * Get codeOeuvre
     *
     * @return integer
     */
    public function getCodeOeuvre()
    {
        return $this->codeOeuvre;
    }

    /**
     * Set codeComposition
     *
     * @param integer $codeComposition
     *
     * @return CompositionOeuvre
     */
    public function setCodeComposition($codeComposition)
    {
        $this->codeComposition = $codeComposition;

        return $this;
    }

    /**
     * Get codeComposition
     *
     * @return integer
     */
    public function getCodeComposition()
    {
        return $this->codeComposition;
    }

    /**
     * Get codeComposerOeuvre
     *
     * @return integer
     */
    public function getCodeComposerOeuvre()
    {
        return $this->codeComposerOeuvre;
    }
}
