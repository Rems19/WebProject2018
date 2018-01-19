<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Abonne;
use AppBundle\Entity\Pays;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends Controller
{

    /**
     * @Route("/account/cart", name="cart")
     */
    public function showCart()
    {

    }

    /**
     * @Route("/account/login", name="login")
     */
    public function showLogin(UserInterface $user = null, AuthenticationUtils $authUtils)
    {
        if ($user != null)
        {
            return $this->redirect($this->generateUrl('homepage'));
        }
        return $this->render(':security:login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'page_head' => 'Connexion',
            'page_head_small' => 'Connectez-vous à votre compte Alib\'Album',
            'box_head' => 'Connexion',
            'box_width' => '30%',
        ]);
    }

    /**
     * @Route("/account/register", name="register")
     */
    public function showRegister(Request $request, UserInterface $user = null)
    {
        $errors = [];
        $post = $request->request;
        $login = $post->get('username');
        $pass = $post->get('password');
        $email = $post->get('email');
        $fname = $post->get('firstname');
        $lname = $post->get('lastname');
        $country = $post->get('country');
        $address = $post->get('address');
        $postal = $post->get('postalcode');
        $city = $post->get('city');
        $aboRepo = $this->getDoctrine()->getRepository(Abonne::class);
        $paysRepo = $this->getDoctrine()->getRepository(Pays::class);
        if (!empty($login) && !empty($pass) && !empty($email) && !empty($fname) && !empty($lname) && !empty($country)
            && !empty($address) && !empty($postal) && !empty($city)) {
            if (strlen($login) > 10) array_push($errors, "Le nom d'utilisateur doit faire au maximum 10 caractères.");
            if ($aboRepo->findOneBy(['login' => $login])) array_push($errors, "Ce nom d'utilisateur est déjà utilisé.");
            if (strlen($pass) > 80) array_push($errors, "Le mot de passe doit faire au maximum 80 caractères.");
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) array_push($errors, "Veuillez utiliser une adresse mail valide.");
            if ($aboRepo->findOneBy(['email' => $email])) array_push($errors, "Cette adresse mail est déjà utilisée.");
            if (strlen($fname) > 40) array_push($errors, "Le prénom doit faire au maximum 40 caractères.");
            if (strlen($lname) > 50) array_push($errors, "Le nom doit faire au maximum 50 caractères.");
            if (!$paysRepo->find($country)) array_push($errors, "Le pays spécifié n'est pas reconnu.");
            if (strlen($address) > 50) array_push($errors, "L'adresse doit faire au maximum 50 caractères.");
            if (!preg_match('/^[0-9]{5}$/', $postal)) array_push($errors, "Le code postal est invalide.");
            if (strlen($city) > 50) array_push($errors, "La ville doit faire au maximum 50 caractères.");

            if (empty($errors))
            {
                $abo = new Abonne();
                $abo->setLogin($login);
                $abo->setPassword($pass);
                $abo->setEmail($email);
                $abo->setPrenomAbonne($fname);
                $abo->setNomAbonne($lname);
                $abo->setCodePays($country);
                $abo->setAdresse($address);
                $abo->setCodePostal($postal);
                $abo->setVille($city);

                $this->getDoctrine()->getManager()->persist($abo);
                $this->getDoctrine()->getManager()->flush();

                return $this->redirect($this->generateUrl('login'));
            }
        }
        if ($user != null)
        {
            return $this->redirect($this->generateUrl('homepage'));
        }
        $countries = $paysRepo->findAll();
        usort($countries, function (Pays $a, Pays $b) { return strcmp($a->getNomPays(), $b->getNomPays()); });
        return $this->render(':security:register.html.twig', [
            'errors' => empty($errors) ? null : $errors,
            'countries' => $countries,
            'page_head' => 'Inscription',
            'page_head_small' => 'Créez votre compte Alib\'Album',
            'box_head' => 'Inscription',
            'box_width' => '50%',
        ]);
    }
}
