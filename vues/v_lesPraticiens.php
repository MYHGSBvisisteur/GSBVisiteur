<div id="contenu">
    
    <h2>Details Praticiens</h2>
    <a href="index.php?uc=consulterPraticien&action=parVille"><input type="button" value="Trier Par Ville"></a>
    <table>
        <tr><th>Nom</th><th>Prenom</th><th>Adresse</th><th>Ville</th><th>En savoir plus</th><!--<th>Fonction</th><th>Lieu</th><th>Coeff</th>--></tr>        
<?php
foreach($lesInfosPraticiens as $unPraticien){
?>
        <tr><td><?php echo $unPraticien['PRA_NOM'];?></td><td><?php echo $unPraticien['PRA_PRENOM'];?></td><td><?php echo $unPraticien['PRA_ADRESSE'];?></td><td><?php echo $unPraticien['PRA_VILLE'];?></td><td><a href="index.php?uc=consulterPraticien&action=lePraticien&id=<?php echo $unPraticien['PRA_NUM']; ?>">+<?php echo $unPraticien['PRA_NUM']; ?><a/></td></tr>
        
<?php } ?>
    </table>
</div>