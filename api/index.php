<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->post('/begin', function (Request $request, Response $response, array $args) {
    include_once("steps/begin.php");
});
$app->post('/validate', function (Request $request, Response $response, array $args) {
    session_start();
    $_SESSION["cpf"] = $_POST["cpf"];
    if (validaCPF($_SESSION["cpf"])) {
        if ($_SESSION["cpf"] == 12345678909) {
            include_once("steps/client.php");
        } else {
            include_once("steps/nonclient_name.php");
        }
    } else {
        include_once("steps/not_valid.php");
    }
});
$app->post('/validatename', function (Request $request, Response $response, array $args) {
    session_start();
    $_SESSION["name"] = $_POST["name"];
    include_once("steps/nonclient_birthdate.php");
});
$app->post('/validatedate', function (Request $request, Response $response, array $args) {
    session_start();
    $_SESSION["date"] = $_POST["date"];
    include_once("steps/nonclient_email.php");
});
$app->post('/validateemail', function (Request $request, Response $response, array $args) {
    session_start();
    $_SESSION["email"] = $_POST["email"];
    include_once("steps/nonclient_finish.php");
});
$app->post('/validateinitials', function (Request $request, Response $response, array $args) {
    session_start();
    $iniciais = $_POST["initials"];
    if($iniciais == "SPAM"){
        include_once("steps/client_processing.php");    
    }else{
    include_once("steps/not_valid.php");
    }
});
$app->post('/purchasecomplete', function (Request $request, Response $response, array $args) {
    session_start();
    include_once("steps/purchase_complete.php");
});
$app->run();

function validaCPF($cpf = null)
{

	// Verifica se um número foi informado
    if (empty($cpf)) {
        return false;
    }

	// Elimina possivel mascara
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	
	// Verifica se o numero de digitos informados é igual a 11 
    if (strlen($cpf) != 11) {
        return false;
    }
	// Verifica se nenhuma das sequências invalidas abaixo 
	// foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999') {
        return false;
	 // Calcula os digitos verificadores para verificar se o
	 // CPF é válido
    } else {

        for ($t = 9; $t < 11; $t++) {

            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf {
                    $c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf {
                $c} != $d) {
                return false;
            }
        }

        return true;
    }
}