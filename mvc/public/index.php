<?php



error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../src/config.php";


include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/registre.php";
include "../src/controllers/logout.php";
include "../src/controllers/userpage.php";
include "../src/controllers/inscripcio.php";
include "../src/controllers/verificaPasswd.php";
// include "../src/controllers/apartament_ajax.php";
 include "../src/middleware/middleAdmin.php";


include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";

$request = new \Emeset\Request();
$response = new \Emeset\Response();
$container = new \Emeset\Container($config);

$r = '';
if (isset($_REQUEST["r"])) {
    $r = $_REQUEST["r"];
}



 if ($r == "registre") {
    ctrlRegistre($request, $response, $container);
}elseif ($r == "inscripcio") {
    ctrlInscripcio($request, $response, $container);
}elseif ($r == "verificarPasswd") {
    ctrlVerificarPasswd($request, $response, $container);
}
else {
    getUserData($request, $response, $container, "ctrlIndex");
}

$response->response();
