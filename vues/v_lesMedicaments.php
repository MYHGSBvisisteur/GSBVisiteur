<div id="lesMedicaments">
    

<h2>Pharmacopee</h2>

<?php

foreach($lesMedicaments as $unMedicament)
{
 $depot=$unMedicament['MED_DEPOTLEGAL'];
 $nomCommercial=$unMedicament['MED_NOMCOMMERCIAL'];
 $famille=$unMedicament['FAM_CODE'];
 $composition=$unMedicament['MED_COMPOSITION'];
 $effets=$unMedicament['MED_EFFETS'];
 $contreIndication=$unMedicament['MED_CONTREINDIC'];
 $prix=$unMedicament['MED_PRIXECHANTILLON'];
}

?>

<table>
<tr>
<td><label for="deplegal">Dépot légal:</label></td><td><input type="text" id="deplegal" value="<?php echo $depot; ?>"/></td>
</tr>
<tr>
<td><label for="nomComm">Nom commercial:</label></td><td><input type="text" id="nomComm"  value="<?php echo $nomCommercial; ?>"/></td>
</tr>

<tr>
<td><label for="fam">Famille:</label></td><td><input type="text" id="fam" value="<?php echo $famille; ?>"/></td>
</tr>


<tr>
<td><label for="compo">Composition:</label></td>
<td><textarea id="compo"/>
    <?php echo $composition; ?>
    </textarea></td>
</tr>

<tr>
<td><label for="effe">Effets:</label></td>
   <td> <textarea id="effe">
    <?php echo $effets; ?>
    </textarea></td>
</tr>


<tr>
<td><label for="contrIndi">Contre Indication:</label></td>
    <td><textarea id="contrIndi">
    <?php echo $contreIndication; ?>
    </textarea></td>
</tr>


<tr>
<td><label for="prixEch">Prix échantillon:</label></td><td><input type="text" id="prixEch" value="<?php echo $prix; ?>"/></td>
</tr>

<tr>
<td>
<form action="" method="">
<input type="submit" value="<"/>
<input type="submit" value=">"/></td>
</form>
</tr>
    
</table>  

</div>
    