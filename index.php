<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/clima', function() use($app) {
	
$arreglo = ["Alumno"=>["Gabriel_Ceballos" => "Ncta_415121080"]];
	
    return $app -> json($arreglo);
});

$app->run();