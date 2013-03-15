<div id="lesMedicaments">
    

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

<?php for($i=0;$i<=5;$i++)
{
    
?>
<table>
<tr>
<td>Dépot légal:</td><td><?php echo $depot[$i]; ?></td>
</tr>
<tr>
<td>Nom commercial:</td><td><?php echo $nomCommercial[$i]; ?></td>
</tr>

<tr>
<td>Famille:</td><td><?php echo $famille[$i]; ?></td>
</tr>


<tr>
<td>Composition:</td>
<td><?php echo $composition[$i]; ?>/td>
</tr>

<tr>
<td>Effets:</td>
   <td>  <?php echo $effets[$i]; ?></td>
</tr>


<tr>
<td>Contre Indication:</td>
    <td>    <?php echo $contreIndication[$i]; ?></td>
</tr>


<tr>
<td>Prix échantillon:</td><td><?php echo $prix[$i]; ?></td>
</tr>

<tr>
<td>
<form action="<?php echo "http://127.0.0.1/hasan/GSBVisiteur-master/index.php?uc=consulterMedicament'.$i--"; ?>" method="get">
<input type="submit" value="<"/>
</form>
    
<form action="http://127.0.0.1/hasan/GSBVisiteur-master/index.php?uc=consulterMedicament" method="get">
<input type="submit" value=">"/></td>
</form>
</tr>
    
</table>  

</div>
 
<?php } ?>