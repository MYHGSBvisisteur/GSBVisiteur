<?php
//include("vues/v_sommaire.php"); Pas besoin car déjà dans le controleur

?>

<div id="contenu">
    
      <h2>Rapport de visite </h2>
      
        <table border="0">
             <tr>
                <td>Numero : </td>  
                <td><input type="text" name="num" spaceholder="Votre numéro"></td>           
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
                <td><input type="text" name="coeff" value="<?PHP echo $ligne['PRA_COEFNOTORIETE'] ?>"></td>           
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><input type="checkbox" name="remplacant" value="yes">
                <SELECT name="praticien2" size="1">
                    <?PHP foreach ($lesPraticiens as $ligne){
                            echo "<OPTION VALUE='" .$ligne['PRA_NUM']. "'>" .$ligne['PRA_NOM']. "</OPTION>";
                        }
                    ?>
                    </SELECT>
                </td>           
             </tr>
             <tr>
                <td>Date du rapport: </td>  
                <td><input type="text" name="date"></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><SELECT name="motif" size="1">
                    <OPTION selected>Périodicité
                    <OPTION>
                    <OPTION>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Bilan : </td>  
                <td><textarea rows="5" cols="50"></textarea></td>           
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
                        }
                        /*if (isset ($ligne) ){
                            foreach ($lesMedicaments as $ligne){
                            echo "<OPTION VALUE='" .$ligne['MED_DEPOTLEGAL']. "'>" .$ligne['MED_NOMCOMMERCIAL']. "</OPTION>";
                            }
                        }*/
?>
                    </SELECT></td>
             </tr>
             <tr>
                <td>Documentation offerte: </td>  
                <td><input type="checkbox" name="doc" value="yes"></td>           
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
          
          <input type="reset" value="Annuler"><input type="submit" value="Valider">
</div>