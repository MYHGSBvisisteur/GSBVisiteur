<?php
include("vues/v_sommaire.php");
$lesMedicaments=$pdo-> getLesMedicaments();
include("vues/v_lesMedicaments.php");
?>