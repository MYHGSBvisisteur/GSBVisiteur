<div id="contenu">
    
      <h2>Rapport de visite </h2>
      
      <form action="" method="POST">
          
        <table border="0">
             <tr>
                <td>Numero : </td>  
                <td><?PHP echo $mat['MaxNumRapport']+1; //Affiche le résultat de la fonction getLesNumCR ?></td>           
             </tr>
             <tr>
                <td>Date visite : </td>  
                <td><input type="text" name="dateVisite"> (JJ/MM/AAAA)</td>           
             </tr>
             <tr>
                <td>Praticien : </td>  
                <td><SELECT id="selectPraticiens" name="praticien" size="1">
                    <?PHP foreach ($lesPraticiens as $ligne){
                            echo "<OPTION VALUE='" .$ligne['PRA_NUM']. "'>" .$ligne['PRA_NOM']. "</OPTION>";
                        }
                    ?>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Coefficient : </td>  
                <td>id='coefficient' value=''<?PHP echo ""//Affiche le coeff du praticien saisi dans la liste déroulante ?></td>           
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><input type="checkbox" id="remplacant" name="remplacant" value="1" onClick="liste()">
                <SELECT id="praticien2" name='remplacant2' size="1" disabled>
                    <?PHP foreach ($lesPraticiens as $ligne){?>
                            <OPTION VALUE='<?php echo $ligne['PRA_NUM']?>'> <?php echo $ligne['PRA_NOM']; ?> </OPTION>
                      <?php  }?>
                    
                    </SELECT>
                </td>
             </tr>
             <tr>
                <td>Date du rapport: </td>  
                <td><?PHP echo date("d/m/Y"); ?></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><SELECT id="motif1" size="1" name="lstMotif" onClick="griserText()"><!--Nom différent entre id et onClick sinon ne marche pas-->
                    <OPTION>Périodicité</OPTION>
                    <OPTION>Actualisation annuelle</OPTION>
                    <OPTION>Rapport Annuel</OPTION>
                    <OPTION>Baisse activité</OPTION>
                    </SELECT><input type="text" name ="txtMotif"id="motif2" onClick="griserListe()"></td>
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
                <td><SELECT name="produit1" size="1">
                        <option></option>
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Produit 2 : </td>  
                <td><SELECT name="produit2" size="1">
                        <option></option>
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Documentation offerte: </td>  
                <td><input type="checkbox" name="doc" value="oui"></td>           
             </tr>
          </table>
          
          <br/><br/>
          
          <h2>Echantillons</h2>
          
          <SELECT name="medoc" size="1">
                        <option></option>
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT>
          <input type="text" name="qte" placeholder="Quantité">
          <input type="submit" name="Ajout" value="+">
          
          <br><br>
          
              <?PHP include("vues/v_traitementSaisieCR.php"); ?>
              
          <input type="reset" value="Annuler"><input type="submit" name="Valid" value="Valider">
          </form>
</div>