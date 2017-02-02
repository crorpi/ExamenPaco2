<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GFCTBundle\Entity\Empresa;
use GFCTBundle\Form\ProfesoresType;
use GFCTBundle\Entity\Profesores;
use Symfony\Component\HttpFoundation\Request;


// le pasamos la funcion allaction para que haga referencia a la entidad Profesores y guarde sus campos.
//Le tenemos que pasa la libreria ProfesoresType para que no de ningun error.

class ProfesoresController extends Controller{


    public function allAction(){

    	$repository = $this->getDoctrine()->getRepository('GFCTBundle:Profesores');
    	$profesores = $repository->findAll();
        return $this->render('GFCTBundle:Profesores:all.html.twig',array('profesores'=>$profesores)); 
    }

     public function nuevoAction(Request $request){

    	$form= $this->createForm(ProfesoresType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()){

    		$profesores = $form->getData();
    		$pr = $this->getDoctrine()->getManager();
    		$pr->persist($profesores);
    		$pr->flush();


    		return $this->redirectToRoute('exito_profesores');

    	}

    	return $this->render('GFCTBundle:Profesores:nuevo.html.twig',array('form'=>$form->createView() )); // Le pasamos el formulario una vez generado luego le pasamos el createView que nos va a pintar justo ese formulario para que el render lo utilize dentro de la vista.
    }

    public function msgExitoAction(){

        return $this->render('GFCTBundle:Profesores:msgExito.html.twig');

    }
}