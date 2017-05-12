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

    /**
     * @Route("/hello/{name}")
     * @param String $name
     * @return Response
     * @throws \HttpInvalidParamException
     */
    public function helloToniSiscuAction(String $name)
    {
        if ($name !== 'Toni' && $name !== 'Siscu') {
            throw $this->createNotFoundException('No es Toni o Siscu');
        }

        return new Response('Hola '.$name);
    }

    /**
     * @Route("/hellof/{name}", requirements={"name": "Toni|Siscu"})
     * @param String $name
     * @return Response
     */
    public function helloToniSiscoForbiddenAction(String $name)
    {
        return new Response('Hola '.$name);
    }

    /**
     * @Route("/swapi")
     * @return Response
     */
    public function swapiAction()
    {
        $swapiResponse = [
            'birth_year' => '19BBY',
            'created' => '2014-12-09T13:50:51.644000Z',
            'edited' => '2014-12-20T21:17:56.891000Z',
            'eye_color' => 'blue',
            'films' =>
                array(
                    0 => 'http://swapi.co/api/films/2/',
                    1 => 'http://swapi.co/api/films/6/',
                    2 => 'http://swapi.co/api/films/3/',
                    3 => 'http://swapi.co/api/films/1/',
                    4 => 'http://swapi.co/api/films/7/',
                ),
            'gender' => 'male',
            'hair_color' => 'blond',
            'height' => '172',
            'homeworld' => 'http://swapi.co/api/planets/1/',
            'mass' => '77',
            'name' => 'Luke Skywalker',
            'skin_color' => 'fair',
            'species' =>
                array(
                    0 => 'http://swapi.co/api/species/1/',
                ),
            'starships' =>
                array(
                    0 => 'http://swapi.co/api/starships/12/',
                    1 => 'http://swapi.co/api/starships/22/',
                ),
            'url' => 'http://swapi.co/api/people/1/',
            'vehicles' =>
                array(
                    0 => 'http://swapi.co/api/vehicles/14/',
                    1 => 'http://swapi.co/api/vehicles/30/',
                ),
        ];



        //return $this->json($swapiResponse);

        return $this->render('jsonView.html.twig', [
            'swapi' => json_encode($swapiResponse),
        ]);
    }
}