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
		//$lesCR = $pdo-> getLesCR($idVisiteur);
                $lesCR = $pdo-> getLesCR();
                
               // $numCR=$lesCR[$i]['RAP_NUM'];
                
               //$lesEchant = $pdo -> getLesEchantillons($_REQUEST['i']);
                
                if(empty($_REQUEST['i'])){//Si i est vide on le met à 0
                    $i = 0;
                }elseif($_REQUEST['i'] >=count($lesCR)){//Si i est sup ou égal au nb max de cr on le remet à 0
                    $i=0;
                }elseif($_REQUEST['i'] <=0){//Si i est inf à 0 on remet le cr max
                    $i=count($lesCR);
                }
                else{
                    $i=$_REQUEST['i'];
                }
                
                include("vues/v_consulterCR.php");
		break;
	}
        case 'saisirCR':{
		//$lesCR=$pdo-> insererLesCR($idVisiteur, $num, $date, $bilan, $motif, $remplacant, $doc);
                $mat = $pdo-> getLesNumCR($idVisiteur);
                
                include("vues/v_saisirCR.php");
                ?>
                <script>
                $('#selectPraticiens').change(function() {
                    var numero = $("#selectPraticiens").val();
                    $.post("Ajax/coeffAjax.php", { numPraticien: numero})
                    .done(function(data) {
                            var coefficient = parseFloat(data);
                            $("#coefficient").val(coefficient);
                    });
                });</script>
		<?php break;
	}
}
?>