<div id="contenu">
    
    <h2>Details Praticiens</h2>
    <table>
        <tr><th>Ville</th><th>Nom</th><th>Prenom</th><th>Adresse</th><th>En savoir plus</th></tr>        
<?php
foreach($lesInfosPraticiens as $unPraticien){
?>
        <tr><td><?php echo $unPraticien['PRA_VILLE'];?></td><td><?php echo $unPraticien['PRA_NOM'];?></td><td><?php echo $unPraticien['PRA_PRENOM'];?></td><td><?php echo $unPraticien['PRA_ADRESSE'];?></td><td><a href="index.php?uc=consulterPraticien&action=lePraticien&id=<?php echo $unPraticien['PRA_NUM'] ?>">+<a/></td></tr>
        
<?php } ?>
    </table>
</div>