<div id="contenu">
    
      <h2>Rapport de visite </h2>
      
        <table border="0">
             <tr>
                <td>Numero : </td>  
                <td><?PHP echo $mat['MaxNumRapport']+1; //Affiche le résultat de la fonction getLesNumCR ?></td>           
             </tr>
             <tr>
                <td>Date visite : </td>  
                <td><input type="text" name="dateVisite"></td>           
             </tr>
             <tr>
                <td>Praticien : </td>  
                <td><SELECT name="praticien" size="1">
                    <?PHP foreach ($lesPraticiens as $ligne){
                            echo "<OPTION VALUE='" .$ligne['PRA_NUM']. "'>" .$ligne['PRA_NOM']. "</OPTION>";
                        }
                    ?>
                    </SELECT></td>          
             </tr>
             <tr>
                <td>Coefficient : </td>  
                <td><?PHP echo $ligne['PRA_COEFNOTORIETE']//Affiche le coeff du praticien saisi dans la liste déroulante ?></td>           
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><input type="checkbox" checked id="remplacant" onClick="liste()">
                <SELECT id="praticien2" size="1" >
                    <?PHP foreach ($lesPraticiens as $ligne){
                            echo "<OPTION NAME ='remplacant' VALUE='" .$ligne['PRA_NUM']. "'>" .$ligne['PRA_NOM']. "</OPTION>";
                        }
                    ?>
                    </SELECT>
                </td>
             </tr>
             <tr>
                <td>Date du rapport: </td>  
                <td><?PHP echo date("d/m/Y")?></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><SELECT id="motif1" size="1" name="motif" onClick="motif()">
                    <OPTION>Périodicité
                    <OPTION>Actualisation annuelle
                    <OPTION>Rapport Annuel
                    <OPTION>Baisse activité
                    </SELECT><input type="text" id="motif2"></td>
             </tr>
             <tr>
                <td>Bilan : </td>  
                <td><textarea rows="5" name="bilan" cols="50"></textarea></td>           
             </tr>
        </table>
      
          <br/><br/>
          
          <h2>Eléments présentés</h2>
          
          <table border="0">
             <tr>
                <td>Produit 1 : </td>  
                <td><SELECT name="produit" size="1">
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Produit 2 : </td>  
                <td><SELECT name="produit" size="1">
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Documentation offerte: </td>  
                <td><input type="checkbox" name="doc" value="1"></td>           
             </tr>
          </table>
          
          <br/><br/>
          
          <h2>Echantillons</h2>
          
          <table border="0">
             <tr>
                <td></td>  
                <td></td>           
             </tr>
          </table>
          
          <br><br>
          <form action="" method="POST">
              
              <input type="reset" value="Annuler"><input type="submit" name="Valid" value="Valider">
              
              <?PHP 
              
              if (isset ($_POST['Valid'])){
                    $num=$mat['MaxNumRapport']+1;
                    $date=date("d/m/Y");
                    $bilan=$_POST['bilan'];
                    $motif=$_POST['motif'];
                    $remplacant=$_POST['remplacant'];
                    $doc=$_POST['doc'];
                    
                    var_dump($num);
                    $lesCR=$pdo-> insererLesCR($idVisiteur, $num, $date, $bilan, $motif, $remplacant, $doc); 
              }
              ?>
          
          </form>
</div>