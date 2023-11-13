<?php


function ctrlInscripcio($request, $response, $container)
{
    $response->setTemplate("inscripcio.php");
    $inscripcions = $container->Users()->getAll();
    $response->set("inscripcions", $inscripcions);
    return $response;
}