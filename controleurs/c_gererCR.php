<?php
include("vues/v_sommaire.php");

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'consulterCR';
}//S'il n'y a aucune action de renseigner dans l'url, effectuer l'action consulterCR

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];

switch($action){
	case 'consulterCR':{
		//$lesCR=$pdo-> getLesCR();
                include("vues/v_consulterCR.php");
		break;
	}
        case 'saisirCR':{
		//$lesCR=$pdo-> getLesProjetsEnDetail();
                include("vues/v_saisirCR.php");
		break;
	}
}
?>