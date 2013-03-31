<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Application Laboratoire Galaxy-Swiss Bourdin</title>
    <SCRIPT LANGUAGE="JavaScript" type="text/javascript">
        function liste(){
            var checkbox = document.getElementById("remplacant");
            var liste = document.getElementById("praticien2");
            
            if (checkbox.checked==false){
                liste.disabled=true;
            }else{
                liste.disabled=false;
            }
        }
        
        function griserText(){
              var texte = document.getElementById("motif2");
              texte.disabled=true;
        }
        function griserListe(){
              var liste = document.getElementById("motif1");
              liste.disabled=true;
        }
    </SCRIPT>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script><!--Fonctionnement Ajax-->
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
    
  </head>
  <body>
    <div id="page">
      <div id="entete">
        <img src="./images/logo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
        <h1>Gestion des visites</h1>
      </div>