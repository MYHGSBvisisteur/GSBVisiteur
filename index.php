<?php
require_once("include/fct.inc.php");
require_once ("include/modele.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
if(!isset($_REQUEST['uc']) || (!isset($_SESSION['login']))){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
        case 'consulterMedicament' :{
		include("controleurs/c_consulterMedicaments.php");break;
	}
	case 'consulterPraticien' :{
		include("controleurs/c_consulterPraticiens.php");break; 
	}
	case 'gererCR' :{
		include("controleurs/c_gererCR.php");break;
	}
}
include("vues/v_pied.php") ;
?>

