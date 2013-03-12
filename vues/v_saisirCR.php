<?php
//include("vues/v_sommaire.php"); Pas besoin car déjà dans le controleur

?>

<div id="contenu">
      <h2>Rapport de visite </h2>
      <div class="corpsForm">
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
                    <OPTION>lundi
                    <OPTION>mardi
                    <OPTION selected>mercredi
                    <OPTION>jeudi
                    <OPTION>vendredi
                    </SELECT></td>           
             </tr>
             <tr>
                <td>Coefficient : </td>  
                <td><input type="text" name="coeff"></td>           
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><input type="checkbox" name="remplacant" value="yes"></td>           
             </tr>
             <tr>
                <td>Date : </td>  
                <td><input type="text" name="date"></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><SELECT name="praticien" size="1">
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
                <td><input type="text" name="prod1"></td>           
             </tr>
             <tr>
                <td>Produit 2 : </td>  
                <td><input type="text" name="prod2"></td>           
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
</div>
     
  