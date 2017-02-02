<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GFCTBundle\Entity\Empresa;
use GFCTBundle\Form\EmpresaType;
use GFCTBundle\Entity\Alumnos;
use Symfony\Component\HttpFoundation\Request;

class AlumnoController extends Controller{


    public function allAction(){

    	$repository = $this->getDoctrine()->getRepository('GFCTBundle:Alumnos');
    	$alumno = $repository->findAll();
        return $this->render('GFCTBundle:Alumno:all.html.twig',array('alumno'=>$alumno));
    }
}