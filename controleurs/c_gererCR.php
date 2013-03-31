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
                
                if (isset ($_POST['Valid'])){
                    $num=$mat['MaxNumRapport']+1;
                    $dateVisite=$_POST['dateVisite'];
                    $dateRapp=date('d/m/Y');
                    $bilan=$_POST['bilan'];
                    $praticien=$_POST['praticien'];

                    $dateVisite = $pdo-> testDate($dateVisite);//Appel de la fonction vérifiant si la date a bien été saisi correctement

                    if(isset($_POST['lstMotif'])==NULL OR $_POST['lstMotif']==""){
                        $lstMotif = FALSE;//evite l'erreur de reconnaissance de variable
                    }else{
                        $motif=$_POST['lstMotif'];// variable commune avec txtMotif pour l'ajout dans la bd du bon motif
                    }
                    if(isset($_POST['txtMotif'])==NULL OR $_POST['txtMotif']==""){
                        $txtMotif = FALSE;
                    }else {
                        $motif=$_POST['txtMotif'];// variable commune avec lstMotif pour l'ajout dans la bd du bon motif
                    }

                    if(isset($_POST['produit1']) == NULL){
                        $produit1 = FALSE;
                    }else{
                        $produit1 = $_POST['produit1'];
                    }
                    if(isset($_POST['produit2']) == NULL){
                        $produit2 = FALSE;
                    }else{
                        $produit2 = $_POST['produit2'];
                    }

                    if(isset($_POST['remplacant']) == NULL){
                         $remplacant2="non";
                    }else{
                        $remplacant2=$_POST['remplacant2'];
                    }

                    if(isset($_POST['doc']) == NULL){//documentation offerte oui si coché non sinon
                        $doc=FALSE;
                    }else{
                        $doc=TRUE;
                    }

                    if ($bilan=="" || $motif=="" || $dateVisite==FALSE || $produit1==FALSE || $produit2==FALSE){
                        ajouterErreur("Certains paramètres n'ont pas été saisi!");
                                      include("vues/v_erreurs.php");
                    }else{
                        $lesCR=$pdo-> insererLesCR($idVisiteur, $num, $praticien, $dateRapp, $bilan, $motif, $remplacant2, $doc, $dateVisite);
                    }
              }
              // Traitement des échantillons
              if (isset ($_POST['Ajout'])){

                  $qte = $_POST['qte'];
                  $num=$mat['MaxNumRapport']+1;//Récupère le bon num de rapport

                  if(isset($_POST['medoc']) == NULL){
                        $medoc = FALSE;
                    }else{
                        $medoc = $_POST['medoc'];
                    }

                  if ($qte=="" || $medoc==FALSE){
                      ajouterErreur("Certains paramètres n'ont pas été saisi!");
                                      include("vues/v_erreurs.php");
                  }else{
                      $lesEchantillons = $pdo -> insererLesEchantillons($idVisiteur, $num, $medoc, $qte);
                  }
              }
                include("vues/v_saisirCR.php");
                ?>

                <script>
                
                jQuery(document).ready(function(){//Attendre que jQuery se charge
                
                    $('#selectPraticiens').change(function() {
                        var numero = $("#selectPraticiens").val();
                        $.post("Ajax/coeffAjax.php", { numPraticien: numero})
                        .done(function(data) {
                                var coefficient = parseFloat(data);
                                $("#coefficient").val(coefficient);
                        });
                    });
                
                    $('#med1, #med2').change(function(){
                        var med1 = '<option value="'+$("#med1").val()+'">'+$("#med1 option:selected").text()+'</option>';//Récupère la valeur de l'élément sélectionné'
                        var med2 = '<option value="'+$("#med2").val()+'">'+$("#med2 option:selected").text()+'</option>';
                        $('#med').html(med1 + med2);//Les ajoute dans la nouvel liste déroulante
                    });
                });
                </script>
		<?php break;
	}
}
?>