<div id="contenu">
    
    <h2>Details Praticiens</h2>
    <table>
        <tr><th>Ville</th><th>Nom</th><th>Prenom</th><th>Adresse</th><th>En savoir plus</th><!--<th>Fonction</th><th>Lieu</th><th>Coeff</th>--></tr>        
<?php
foreach($lesInfosPraticiens as $unPraticien){
?>
        <tr><td><?php echo $unPraticien['PRA_VILLE'];?></td><td><?php echo $unPraticien['PRA_NOM'];?></td><td><?php echo $unPraticien['PRA_PRENOM'];?></td><td><?php echo $unPraticien['PRA_ADRESSE'];?></td><td><a href="index.php?uc=consulterPraticien&action=lePraticien&id=<?php echo $unPraticien['PRA_NUM'] ?>">+<a/></td><!--<td><?php echo $unPraticien['TYP_LIBELLE'];?></td><td><?php echo $unPraticien['TYP_LIEU'];?></td><td><?php echo $unPraticien['PRA_COEFNOTORIETE'];?></td>--></tr>
        
<?php } ?>
    </table>
</div>