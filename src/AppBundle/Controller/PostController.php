<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/crear")
     */
    public function crearAction(Request $request)
    {
        return new Response('crear');
    }

    /**
     * @Route("/modificar/{nombre}")
     */
    public function modificarAction(Request $request, $nombre)
    {
        return new Response('modificar ' . $nombre);
    }

    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        return new Response('listado');
    }

    /**
     * @Route("/ver/{id}")
     */
    public function verAction(Request $request, $nombre)
    {
        return new Response('ver ' . $nombre);
    }
}
