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
           // $k=1;
            include("vues/v_lesMedicaments.php");
            break;
	}
	case 'suivant':
        {
          
           //$k+=1;
            include("vues/v_lesMedicaments.php");
            break;
        }
            case 'precedent':
        {
            
            //$k-=1;
            include("vues/v_lesMedicaments.php");
            break;
        }
}
?>