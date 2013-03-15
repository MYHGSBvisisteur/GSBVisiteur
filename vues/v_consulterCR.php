<div id="contenu">
    
      <h2>Rapport de visite </h2>
      
      
      
      <?PHP
      //$i=0;
      
      //while ($ligne = $rs->fetchAll(PDO::FETCH_ASSOC);){   
      for ($i=0;$i<2;$i++){?>
        <table border="0">
            
             <tr>
                <td>Numero : </td>  
                <td><?PHP echo $lesCR[$i]['PRA_NUM']; ?></td>
             </tr>
             <tr>
                <td>Date visite : </td>  
                <td></td>
             </tr>
             <tr>
                <td>Praticien : </td>  
                <td><?PHP echo $lesCR[$i]['PRA_NOM']; ?></td>
             </tr>
             <tr>
                <td>Coefficient : </td>  
                <td><?PHP echo $lesCR[$i]['PRA_COEFNOTORIETE']; ?></td>
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><?PHP //echo $lesCR[$i]['RAP_REMPLACANT']; ?></td>           
             </tr>
             <tr>
                <td>Date : </td>  
                <td><?PHP echo $lesCR[$i]['RAP_DATE']; ?></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><?PHP echo $lesCR[$i]['RAP_MOTIF']; ?></td>
             </tr>
             <tr>
                <td>Bilan : </td>  
                <td><?PHP echo $lesCR[$i]['RAP_BILAN']; ?></td>           
             </tr>
        </table>
      
          <br/><br/>
          
          <h2>Eléments présentés</h2>
          
          <table border="0">
             <tr>
                <td>Produit 1 : </td>  
                <td><?PHP echo $lesCR[$i]['MED_NOMCOMMERCIAL']; ?></td>
             </tr>
             <tr>
                <td>Produit 2 : </td>  
                <td><?PHP echo $lesCR[$i]['MED_NOMCOMMERCIAL']; ?></td>
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
          
          <input type="submit" value="Précedent"><input type="submit" value="Suivant">
          
          <?PHP //$i++; 
          } ?>
          
          <br><br>
</div>