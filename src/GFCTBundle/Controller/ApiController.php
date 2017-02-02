<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GFCTBundle\Form\ProfesoresType;
use GFCTBundle\Entity\Profesores;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller{

       private function serializeEmpresa(Profesores $profesores)
    {
      return array(
          'nombre' => $profesores->getNombre(),
          'apellidos' => $profesores->getApellidos(),
          'departamento' => $profesores->getDepartamento(),
          
      );
    }
    public function profesoresAction()
    {
        $repository = $this->getDoctrine()->getRepository('GFCTBundle:Profesores');
        $profesores = $repository->findAll();


        //var_dump($empresas);
        $data = array('profesores' => array());
        foreach ($profesores as $profesores) {
            $data['profesores'][] = $this->serializeEmpresa($empresa);
        }
        $response = new JsonResponse($data, 400);
        return $response;
        //return $this->json($empresas);*/
    }

}