<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Abonne
 *
 * @ORM\Table(name="Abonne")
 * @ORM\Entity
 */
class Abonne implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Abonne", type="string", length=50, nullable=false)
     */
    private $nomAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="Login", type="string", length=10, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=80, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Code_Postal", type="string", length=50, nullable=true)
     */
    private $codePostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Pays", type="integer", nullable=true)
     */
    private $codePays;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=0, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="UserId", type="string", length=128, nullable=true)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="Credit", type="integer", nullable=true)
     */
    private $credit;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom_Abonne", type="string", length=40, nullable=true)
     */
    private $prenomAbonne;

    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Abonne", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAbonne;

    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumn(name="Code_Pays", referencedColumnName="Code_Pays")
     */
    private $pays;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Achat", mappedBy="abonne")
     * @ORM\JoinColumn(name="Code_Abonne", referencedColumnName="Code_Abonne")
     */
    private $achats;

    /**
     * @return string
     */
    public function getNomAbonne()
    {
        return $this->nomAbonne;
    }

    /**
     * @param string $nomAbonne
     */
    public function setNomAbonne($nomAbonne)
    {
        $this->nomAbonne = $nomAbonne;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return int
     */
    public function getCodePays()
    {
        return $this->codePays;
    }

    /**
     * @param int $codePays
     */
    public function setCodePays($codePays)
    {
        $this->codePays = $codePays;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param string $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return int
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param int $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return string
     */
    public function getPrenomAbonne()
    {
        return $this->prenomAbonne;
    }

    /**
     * @param string $prenomAbonne
     */
    public function setPrenomAbonne($prenomAbonne)
    {
        $this->prenomAbonne = $prenomAbonne;
    }

    /**
     * @return int
     */
    public function getCodeAbonne()
    {
        return $this->codeAbonne;
    }


    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        return $this->login;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->codeAbonne,
            $this->login,
            $this->password
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list(
            $this->codeAbonne,
            $this->login,
            $this->password
        ) = unserialize($serialized);
    }

    /**
     * @return Pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @return mixed
     */
    public function getAchats()
    {
        return $this->achats;
    }
}
