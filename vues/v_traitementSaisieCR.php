<?PHP 
              
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
          echo"Certains paramètres n'ont pas été saisi!";
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
        echo"Certains paramètres n'ont pas été saisi!";
    }else{
        $lesEchantillons = $pdo -> insererLesEchantillons($idVisiteur, $num, $medoc, $qte);
    }
}
?>