<?php
include("vues/v_sommaire.php");
$lesInfosPraticiens = $pdo->getLesInfosPraticiens();
include("vues/v_lesPraticiens.php");

?>