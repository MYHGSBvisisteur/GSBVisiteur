<div id="contenu">
    
      <?PHP 
          $numCR=$lesCR[$i]['RAP_NUM'];
          $nomPRA=$lesCR[$i]['PRA_NOM'];
          $coeff=$lesCR[$i]['PRA_COEFNOTORIETE'];
          $date=$lesCR[$i]['RAP_DATE'];
          $motif=$lesCR[$i]['RAP_MOTIF'];
          $doc=$lesCR[$i]['RAP_DOC'];
          if($doc==1){
              $doc='oui';
          }else{
              $doc='non';
          }
          $remp=$lesCR[$i]['RAP_REMPLACANT'];
          $dateVisite=$lesCR[$i]['RAP_DATE_VISITE'];
          $bilan=$lesCR[$i]['RAP_BILAN'];
          $produit1=$lesCR[$i]['MED_NOMCOMMERCIAL'];
          $produit2=$lesCR[$i]['MED_NOMCOMMERCIAL'];
          $qte=$lesCR[$i]['OFF_QTE'];
    ?>
    
    <h2>Rapport de visite </h2>
    
        <table border="0">
            
             <tr>
                <th>Numero : </th>  
                <td><?PHP echo $numCR ?></td>
             </tr>
             <tr>
                <th>Date visite : </th>  
                <td><?PHP echo $dateVisite ?></td>
             </tr>
             <tr>
                <th>Praticien : </th>  
                <td><?PHP echo $nomPRA ?></td>
             </tr>
             <tr>
                <th>Coefficient : </th>  
                <td><?PHP echo $coeff ?></td>
             </tr>
             <tr>
                <th>Remplacant : </th>  
                <td><?PHP echo $remp ?></td>           
             </tr>
             <tr>
                <th>Date rapport : </th>  
                <td><?PHP echo $date ?></td>           
             </tr>
             <tr>
                <th>Motif : </th>  
                <td><?PHP echo $motif ?></td>
             </tr>
             <tr>
                <th>Bilan : </th>  
                <td><?PHP echo $bilan ?></td>           
             </tr>
             <tr>
                <th>Documentation offerte: </th>  
                <td><?PHP echo $doc ?></td>           
             </tr>
        </table>
      
          <br/><br/>
          
          <!--<h2>Eléments présentés</h2>
          
          <table border="0">
             <tr>
                <th>Produit 1 : </th>  
                <td><?PHP //echo $produit1 ?></td>
             </tr>
             <tr>
                <th>Produit 2 : </th>  
                <td><?PHP //echo $produit2 ?></td>
             </tr>
             <tr>
                <th>Documentation offerte: </th>  
                <td><?PHP //echo $doc ?></td>           
             </tr>
          </table>
          
          <br/><br/>
          
          <h2>Echantillons</h2>
          
          <SELECT name="medoc" size="1">
            <option><?PHP //$produit1 ?></option>
            <option><?PHP //$produit2 ?></option>
          </SELECT>
          <input type="text" name="qte" value="<?PHP //$qte ?>">
          
          <br><br>-->
          
          <a href='index.php?uc=gererCR&action=consulterCR&i=<?PHP echo $i - 1 ?>'><input type="button" value="precedent"></a>
          <a href='index.php?uc=gererCR&action=consulterCR&i=<?PHP echo $i + 1 ?>'><input type="button" value="suivant"></a>
          
          <br><br>
</div>