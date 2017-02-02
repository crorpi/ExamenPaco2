<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GFCTBundle\Entity\Empresa;
use GFCTBundle\Form\EmpresaType;
use GFCTBundle\Entity\Alumnos;
use Symfony\Component\HttpFoundation\Request;

class EmpresaController extends Controller
{
    public function allAction()
    {

    	$repository = $this->getDoctrine()->getRepository('GFCTBundle:Empresa'); // Referencia a classe entidad Empresa
    	$empresa = $repository->findAll();
        return $this->render('GFCTBundle:Empresa:all.html.twig',array('empresa'=>$empresa));
    }

/* 
    public function crearEmpresaAction(){
    	//Nuevo Objeto Tipo Empresa
		$empresa = new Empresa();
		$empresa->setNombre("Excacaviones 1");
		$empresa->setDireccion("calle hola");
		$empresa->setCp("46196");
		$empresa->setTelefono1("123456781");
		$empresa->setTelefono2("123456781");
		$empresa->setFecha(new \DateTime());


		//Doctrine
		$mangDoct=$this->getDoctrine()->getManager();
		$mangDoct->persist($empresa);
		$mangDoct->flush($empresa);

		return $this->render('GFCTBundle:Empresa:crearEmpresa.html.twig',array('empresaId'=>$empresa->getId()));

    }
*/
    public function nuevaAction(Request $request){

    	$form= $this->createForm(EmpresaType::class);

    	$form->handleRequest($request);
    	if ($form->isSubmitted() && $form->isValid()){

    		$empresa = $form->getData();
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($empresa);
    		$em->flush();


    		return $this->redirectToRoute('exito_empresa');

    	}

    	return $this->render('GFCTBundle:Empresa:nueva.html.twig',array('form'=>$form->createView() ));
    }

    public function msgExitoAction(){

        return $this->render('GFCTBundle:Empresa:msgExito.html.twig');

    }
}
