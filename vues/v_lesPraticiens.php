<div id="lesPraticiens">
    <h2>Details Praticiens</h2>
    <table>
        <tr><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Ville</th><th>Fonction</th><th>Lieu</th><th>Coeff</th></tr>        
<?php
foreach($lesInfosPraticiens as $unPraticien){
?>
        <tr><td><?php echo $unPraticien['PRA_NOM'];?></td><td><?php echo $unPraticien['PRA_PRENOM'];?></td><td><?php echo $unPraticien['PRA_ADRESSE'];?></td><td><?php echo $unPraticien['PRA_VILLE'];?></td><td><?php echo $unPraticien['TYP_LIBELLE'];?></td><td><?php echo $unPraticien['TYP_LIEU'];?></td><td><?php echo $unPraticien['PRA_COEFNOTORIETE'];?></td></tr>
        
<?php } ?>
    </table>
</div>