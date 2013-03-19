<?php


if(!isset($_REQUEST['action']) || $_REQUEST['action']!='suivant' || $_REQUEST['action']!='precedent')
    {
	$_REQUEST['action'] = 'debut';
    }
    
$lesMedicaments=$pdo->getLesMedicaments();
$action = $_REQUEST['action'];


switch($action)
{
	case 'debut':
        {
           
            include("vues/v_sommaire.php");
            include("vues/v_lesMedicaments.php");
            break;
	}
	case 'suivant':
        {
            include("vues/v_sommaire.php");
            include("vues/v_lesMedicaments.php");
            break;
        }
            case 'precedent':
        {
            include("vues/v_sommaire.php");
            include("vues/v_lesMedicaments.php");
            break;
        }
}
?>