<?php
/**
 * User: adrian@enalquiler.com
 * Date: 12/05/2017
 * Time: 09:32
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/simple", name="simple")
     */
    public function simpleAction(Request $request)
    {
        return new Response("Simple");
    }

    /**
     * @Route("/hi/{name}")
     * @param $name
     * @return Response
     */
    public function hiAction(String $name)
    {
        return new Response('Hola '.$name);
    }
}