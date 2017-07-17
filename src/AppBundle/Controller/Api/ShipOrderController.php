<?php

namespace AppBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;

class ShipOrderController extends FOSRestController
{
    /**
    * @Rest\Get("/api/shiporder")
    */
    public function getAction()
    {
      //perform get method

        //$result = $this->getDoctrine()->getRepository('AppBundle:[Entity]')->findAll();

        $result = array('1', 'Example shiporder api get response');

        if ($result === null) 
          return new View("No entity available", Response::HTTP_NOT_FOUND);
     
        return $result;
    }
    
    /**
    * @Rest\Get("api/shiporder/{id}")
    */
    public function getByIdAction($id)
    {
      //perform get method

        //$result = $this->getDoctrine()->getRepository('AppBundle:[Entity]')->findAll();

        $result = array('1', "Example shiporder api get response by id = {$id}");

        if ($result === null) 
          return new View("No entity available", Response::HTTP_NOT_FOUND);
     
        return $result;
    }
}
