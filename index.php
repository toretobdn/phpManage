<?

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (isset($_GET['hw_seccion']) && isset($_GET['hw_accion'])) {
    $hw_seccion = $_GET['hw_seccion'];
    $hw_accion = $_GET['hw_accion'];
} else if (isset($_GET['hw_accion'])) {
    $hw_accion = $_GET['hw_accion'];
} else {
    $hw_seccion = "home";
    $hw_accion = "0001";
}

require_once './inc/gestor.inc.php';
