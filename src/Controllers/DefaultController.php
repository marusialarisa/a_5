<?php


namespace Rentit\Controllers;


use Rentit\Controller;

class DefaultController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {  // $dataview=$this->allPublicacion();
      //  $this->render($dataview);


        $data = ['title' => 'DAW SL',];

        $this->render($data);

        function error() { throw new \Exception("[ERROR::]:Non existent method"); }
    }
       /* private function allPublicacion(){
        $publicacion=Publicacion::all()->toArray();
        return $publicacion;
} */

    public function logIn(){
        var_dump($_POST);
    }
}