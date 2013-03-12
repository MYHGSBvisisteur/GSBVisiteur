<?php
//include("vues/v_sommaire.php"); Pas besoin car déjà dans le controleur

?>

<div id="contenu">
      <h2>Rapport de visite </h2>
      <div class="corpsForm">
        <table border="0">
  	   <caption>Saisie des compte rendu de visite</caption>
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
      </div>
</div>
     
  