<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/crear", name="post_crear")
     */
    public function crearAction(Request $request)
    {
        return new Response('crear');
    }

    /**
     * @Route("/modificar/{nombre}", name="post_modificar")
     */
    public function modificarAction(Request $request, $nombre)
    {
        return new Response('modificar ' . $nombre);
    }

    /**
     * @Route("/", name="post_home")
     */
    public function indexAction(Request $request)
    {
        return new Response('homepage');
    }
}
