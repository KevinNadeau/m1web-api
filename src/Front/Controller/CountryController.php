<?php


namespace App\Front\Controller;


class CountryController extends AbstractController {
    public function index (array $uriVars = []){

        $json = file_get_contents('http://localhost:8000/country');
        $obj = json_decode($json, true, 512);
        var_dump($obj["data"]);
        $this->render('countries/index', [
            'obj' => $obj
        ]);
    }
}