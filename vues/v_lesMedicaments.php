<div id="contenu">
    

<h2>Pharmacopee</h2>

<?php

$i=1;
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

//on récupère le cpt de l'url

if(!isset($_REQUEST['cpt']))
{
    $k=1;

    
    
}else{
$k=$_REQUEST['cpt'];
}
?>


<table>
<tr>
<th>Dépot légal:</th><td><?php echo $depot[$k]; ?></td>
</tr>
<tr>
<th>Nom commercial:</th><td><?php echo $nomCommercial[$k]; ?></td>
</tr>

<tr>
<th>Famille:</th><td><?php echo $famille[$k]; ?></td>
</tr>


<tr>
<th>Composition:</th>
<td><?php echo $composition[$k]; ?></td>
</tr>

<tr>
<th>Effets:</th>
   <td>  <?php echo $effets[$k]; ?></td>
</tr>


<tr>
<th>Contre Indication:</th>
    <td>    <?php echo $contreIndication[$k]; ?></td>
</tr>


<tr>
<th>Prix échantillon:</th><td><?php echo $prix[$k].'€'; ?></td>
</tr>

<!--<tr>
<td>
    <a href="index.php?uc=consulterMedicament&action=precedent&cpt=<?php //echo $k-1 ?>"><input type="button" value="Précedent"></a>
   </td>
   <td>
     <a href="index.php?uc=consulterMedicament&action=suivant&cpt=<?php // echo $k+1 ?>"><input type="button" value="Suivant"/></a>
</td>
</tr>-->
    
</table>  

<a href="index.php?uc=consulterMedicament&action=precedent&cpt=<?php if($k<=1){echo $k=count($lesMedicaments);}else{ echo $k-1;} ?>"> <input type="button" value="Précedent"></a>

<a href="index.php?uc=consulterMedicament&action=suivant&cpt=<?php if($k>=count($lesMedicaments)){echo $k=1;} else { echo $k+1;} ?>"><input type="button" value="Suivant"/></a>



</div>
 
