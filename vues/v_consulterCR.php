<div id="contenu">
    
      <h2>Rapport de visite </h2>
      
        <table border="0">
             <tr>
                <td>Numero : </td>  
                <td><?PHP $lesCR['PRA_NUM']; ?></td>
             </tr>
             <tr>
                <td>Date visite : </td>  
                <td><input type="text" name="dateVisite"></td>
             </tr>
             <tr>
                <td>Praticien : </td>  
                <td><?PHP $lesCR['PRA_NOM']; ?></td>
             </tr>
             <tr>
                <td>Coefficient : </td>  
                <td><?PHP $lesCR['PRA_COEFNOTORIETE']; ?></td>
             </tr>
             <tr>
                <td>Remplacant : </td>  
                <td><?PHP $lesCR['RAP_REMPLACANT']; ?></td>           
             </tr>
             <tr>
                <td>Date : </td>  
                <td><?PHP $lesCR['RAP_DATE']; ?></td>           
             </tr>
             <tr>
                <td>Motif : </td>  
                <td><?PHP $lesCR['RAP_MOTIF']; ?></td>
             </tr>
             <tr>
                <td>Bilan : </td>  
                <td><?PHP $lesCR['RAP_BILAN']; ?></td>           
             </tr>
        </table>
      
          <br/><br/>
          
          <h2>Eléments présentés</h2>
          
          <table border="0">
             <tr>
                <td>Produit 1 : </td>  
                <td><?PHP $lesCR['MED_NOMCOMMERCIAL']; ?></td>
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
          
          <br><br>
</div>