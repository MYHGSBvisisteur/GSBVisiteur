<div id="contenu">
    
      <?PHP 
          $numCR=$lesCR[$i]['RAP_NUM'];
          $nomPRA=$lesCR[$i]['PRA_NOM'];
          $coeff=$lesCR[$i]['PRA_COEFNOTORIETE'];
          $date=$lesCR[$i]['RAP_DATE'];
          $motif=$lesCR[$i]['RAP_MOTIF'];
          $bilan=$lesCR[$i]['RAP_BILAN'];
          $produit1=$lesCR[$i]['MED_NOMCOMMERCIAL'];
          $produit2=$lesCR[$i]['MED_NOMCOMMERCIAL'];
    ?>
    
    <h2>Rapport de visite </h2>
    
        <table border="0">
            
             <tr>
                <td>Numero : </td>  
                <td><?PHP echo $numCR ?></td>
             </tr>
             <tr>
                <td>Date visite : </td>  
                <td></td>
             </tr>
             <tr>
                <td>Praticien : </td>  
                <td><?PHP echo $nomPRA ?></td>
             </tr>
             <tr>
                <td>Coefficient : </td>  
                <td><?PHP echo $coeff ?></td>
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><?PHP //echo $lesCR[$i]['RAP_REMPLACANT']; ?></td>           
             </tr>
             <tr>
                <td>Date : </td>  
                <td><?PHP echo $date ?></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><?PHP echo $motif ?></td>
             </tr>
             <tr>
                <td>Bilan : </td>  
                <td><?PHP echo $bilan ?></td>           
             </tr>
        </table>
      
          <br/><br/>
          
          <h2>Eléments présentés</h2>
          
          <table border="0">
             <tr>
                <td>Produit 1 : </td>  
                <td><?PHP echo $produit1 ?></td>
             </tr>
             <tr>
                <td>Produit 2 : </td>  
                <td><?PHP echo $produit2 ?></td>
             </tr>
             <tr>
                <td>Documentation offerte: </td>  
                <td>Oui ou Non</td>           
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
          
          <a href='index.php?uc=gererCR&action=consulterCR&i=<?PHP echo $i - 1 ?>'><input type="button" value="precedent"></a>
          <a href='index.php?uc=gererCR&action=consulterCR&i=<?PHP echo $i + 1 ?>'><input type="button" value="suivant"></a>
          
          <br><br>
</div>