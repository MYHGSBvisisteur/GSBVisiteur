<div id="contenu">
    
      <h2>Rapport de visite </h2>
      
      <form action="" method="POST">
          
        <table border="0">
             <tr>
                <th>Numero : </th>  
                <td><?PHP echo $mat['MaxNumRapport']+1; //Affiche le résultat de la fonction getLesNumCR ?></td>           
             </tr>
             <tr>
                <th>Date visite : </th>  
                <td><input type="text" name="dateVisite" placeholder="JJ/MM/AAAA"></td>           
             </tr>
             <tr>
                <th>Praticien : </th>  
                <td><SELECT id="selectPraticiens" name="praticien" size="1">
                    <?PHP foreach ($lesPraticiens as $ligne){
                            echo "<OPTION VALUE='" .$ligne['PRA_NUM']. "'>" .$ligne['PRA_NOM']. "</OPTION>";
                        }
                    ?>
                    </SELECT></td>
             </tr>
             <tr>
                <th>Coefficient : </th>  
                <td><input type='text' name='coefficient' id='coefficient' value=''/><?PHP //Affiche le coeff du praticien saisi dans la liste déroulante ?></td>           
             </tr>
             <tr>
                <th>Remplacant : </th>  
                <td><input type="checkbox" id="remplacant" name="remplacant" value="1" onClick="liste()">
                <SELECT id="praticien2" name='remplacant2' size="1" disabled>
                    <?PHP foreach ($lesPraticiens as $ligne){?>
                            <OPTION VALUE='<?php echo $ligne['PRA_NUM']?>'> <?php echo $ligne['PRA_NOM']; ?> </OPTION>
                      <?php  }?>
                    
                    </SELECT>
                </td>
             </tr>
             <tr>
                <th>Date du rapport: </th>  
                <td><?PHP echo date("d/m/Y"); ?></td>           
             </tr>
             <tr>
                <th>Motif : </th>  
                <td><SELECT id="motif1" size="1" name="lstMotif" onClick="griserText()"><!--Nom différent entre id et onClick sinon ne marche pas-->
                    <OPTION>Périodicité</OPTION>
                    <OPTION>Actualisation annuelle</OPTION>
                    <OPTION>Rapport Annuel</OPTION>
                    <OPTION>Baisse activité</OPTION>
                    </SELECT><input type="text" name ="txtMotif"id="motif2" onClick="griserListe()"></td>
             </tr>
             <tr>
                <th>Bilan : </th>  
                <td><textarea rows="5" name="bilan" cols="50"></textarea></td>           
             </tr>
        </table>
      
          <br/><br/>
          
          <h2>Eléments présentés</h2>
          
          <table border="0">
             <tr>
                <th>Produit 1 : </th>  
                <td><SELECT name="produit1" id="med1" size="1" onClick="medicament()">
                        <option></option>
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT></td>
             </tr>
             <tr>
                <th>Produit 2 : </th>  
                <td><SELECT name="produit2" id="med2" size="1" onClick="document.getElementsByName('produit2').selectedIndex = this;"onchange="document.getElementsByName('medoc').options.value=this;">
                        <option></option>
                    <?PHP foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                        }?>
                    </SELECT></td>
             </tr>
             <tr>
                <th>Documentation offerte: </th>  
                <td><input type="checkbox" name="doc" value="oui"></td>           
             </tr>
          </table>
          
          <br/><br/>
          
          <h2>Echantillons</h2>
          
          <SELECT name="medoc" id="med" size="1">
              
          </SELECT>
          <input type="text" name="qte" placeholder="Quantité">
          <input type="submit" name="Ajout" value="+">
          
          <br><br>
              
          <input type="reset" value="Annuler"><input type="submit" name="Valid" value="Valider">
          </form>
</div>