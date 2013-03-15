<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'liste';
}
$action = $_REQUEST['action'];
switch($action){
	case 'liste':{		
            include("vues/v_sommaire.php");
            $lesInfosPraticiens = $pdo->getLesInfosPraticiens();
            include("vues/v_lesPraticiens.php");
		break;
	}
	case 'parVille':{
                include("vues/v_sommaire.php");
            $lesInfosPraticiens = $pdo->getLesInfosPraticiensParVille();
            include("vues/v_lesPraticiensVille.php");
		break;
	
         }
         case 'lePraticien':{
                include("vues/v_sommaire.php");
                $idPraticien = $_REQUEST['id'];
            $lesInfosPraticien = $pdo->getInfosPraticien($idPraticien);
            include("vues/v_lePraticienDetail.php");
		break;
	
         }
}
?>