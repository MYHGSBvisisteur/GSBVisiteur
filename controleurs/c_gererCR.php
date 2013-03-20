<?php
include("vues/v_sommaire.php");

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'consulterCR';
}//S'il n'y a aucune action de renseigner dans l'url, effectuer l'action consulterCR

$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['vis_matricule'];//Utiliser dans ma req affichant le num de rapport max du visiteur en tant qye paramètre

$lesMedicaments = $pdo-> getLesMedicaments();
$lesPraticiens = $pdo-> getLesInfosPraticiens();

switch($action){
	case 'consulterCR':{
		$lesCR = $pdo-> getLesCR();
                
                if(empty($_REQUEST['i'])){
                    $i = 0;
                }elseif($_REQUEST['i'] >=  count($lesCR)){
                    $i=0;
                }elseif($_REQUEST['i'] <=  0){
                    $i=count($lesCR);
                }
                else{
                    $i=$_REQUEST['i'];
                }
                
                //var_dump($lesCR);
                include("vues/v_consulterCR.php");
		break;
	}
        case 'saisirCR':{
		//$lesCR=$pdo-> insererLesCR();
                $mat = $pdo-> getLesNumCR($idVisiteur);
                include("vues/v_saisirCR.php");
		break;
	}
}
?>