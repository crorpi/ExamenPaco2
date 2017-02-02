<?php

namespace GFCTBundle\Controller;

use GFCTBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GFCTBundle\Entity\Usuario;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use GFCTBundle\Form\confType;
use GFCTBundle\Entity\conf;



class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GFCTBundle:Default:index.html.twig');
    }


    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Usuario();
        $form = $this->createForm(UserType::class, $user);
        $roles = ["ROLE_USER"]; // te guarda el usuario creado con rol de usuario en la base de datos. 

        // 2) handle the submit (will only happen on POST)
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) { // Cuando se registra el usuario entra en el if

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setRoles($roles); // coge el set roles para meterselo a la base de datos

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new Response("Usuario Registrado");
        }

        return $this->render(
            'GFCTBundle:Default:register.html.twig',
            array('form' => $form->createView())
        );
    }

        public function adminAction()
    {
        return $this->render('GFCTBundle:Default:admin.html.twig');
    }

    public function usuariosAction()
    {
       
        return $this->render('GFCTBundle:Default:usuarios.html.twig');
    }

    public function usuarioPruebaAction()
    {
        $em=$this->getDoctrine();
        $repo=$em->getRepository("GFCTBundle:Usuario");
        $user = $repo->find(1);
        var_dump($user->getRoles());
        $token = new UsernamePasswordToken($user,null,"usuarios",$user->getRoles());
        $this->get("security.context")->setToken($token);
        return $this->render('GFCTBundle:Default:index.html.twig');
    }


    public function loginAction(Request $request)
    {

    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('GFCTBundle:Default:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));

    }

    public function ConfAction(Request $request){

        $form= $this->createForm(confType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $conf = $form->getData();
            $cf = $this->getDoctrine()->getManager();
            $cf->persist($conf);
            $cf->flush();



        }

        return $this->render('GFCTBundle:Default:nuevoConf.html.twig',array('form'=>$form->createView() )); // Le pasamos el formulario una vez generado luego le pasamos el createView que nos va a pintar justo ese formulario para que el render lo utilize dentro de la vista.
    }

}


