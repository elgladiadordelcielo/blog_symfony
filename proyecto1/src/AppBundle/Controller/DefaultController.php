<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/hola", name="paginahola")
     */
    public function holaAction()
    {
        return new Response('<h1>Hola</h1>');
    }


      /**
     * @Route("/hola2.html", name="paginahola2")
     */
    public function hola2Action()
    {
       return $this->render('default/hola2.html.twig');
    }


       /**
     * @Route("/enlaces.html", name="enlaces")
     */
    public function enlacesAction()
    {
       return $this->render('default/enlaces.html.twig');
    }
}
