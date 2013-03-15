<div id="contenu">
    

<h2>Pharmacopee</h2>

<?php

$i=0;
foreach($lesMedicaments as $unMedicament)
{
  
 $depot[$i]=$unMedicament['MED_DEPOTLEGAL'];
 $nomCommercial[$i]=$unMedicament['MED_NOMCOMMERCIAL'];
 $famille[$i]=$unMedicament['FAM_CODE'];
 $composition[$i]=$unMedicament['MED_COMPOSITION'];
 $effets[$i]=$unMedicament['MED_EFFETS'];
 $contreIndication[$i]=$unMedicament['MED_CONTREINDIC'];
 $prix[$i]=$unMedicament['MED_PRIXECHANTILLON'];

$i++;
}
?>


<table>
<tr>
<th>Dépot légal:</th><td><?php echo $depot[$k]; ?></td>
</tr>
<tr>
<td>Nom commercial:</td><td><?php echo $nomCommercial[$k]; ?></td>
</tr>

<tr>
<td>Famille:</td><td><?php echo $famille[$k]; ?></td>
</tr>


<tr>
<td>Composition:</td>
<td><?php echo $composition[$k]; ?></td>
</tr>

<tr>
<td>Effets:</td>
   <td>  <?php echo $effets[$k]; ?></td>
</tr>


<tr>
<td>Contre Indication:</td>
    <td>    <?php echo $contreIndication[$k]; ?></td>
</tr>


<tr>
<td>Prix échantillon:</td><td><?php echo $prix[$k]; ?></td>
</tr>

<tr>
<td>
    <a href="index.php?uc=consulterMedicament&action=precedent&cpt=<?php echo $k-1 ?>"><input type="button" value="Précedent"></a>
     <a href="index.php?uc=consulterMedicament&action=suivant&cpt=<?php echo $k+1 ?>"><input type="button" value="Suivant"/></a>
</td>
</tr>
    
</table>  

</div>
 
