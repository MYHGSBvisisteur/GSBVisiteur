<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Application Laboratoire Galaxy-Swiss Bourdin</title>
    <SCRIPT LANGUAGE="JavaScript" type="text/javascript">
	/*function cpt(){
            var emplacement = document.form1.txtMail.value;

            if (mailOk.test(emplacement)){
                    alert("mail ok");
                    lesSports = getElementsByName("sport");
                            for (i=0; i<lesSports.length; i++){
                                    lesSports[i].checked = true;
                                    document.form1.value = "Tout décocher";
                            }
            else
                    alert("Vous devez saisir un mail valide");
            }
        }*/
        function liste(){
            var checkbox = document.document.getElementById("remplacant");
            var liste = document.document.getElementById("praticien2");
            alert("Vous devez saisir un mail valide");
            if (checkbox.checked){
                alert("checker");
                liste.disabled;
            }
        }
    </SCRIPT>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
    
  </head>
  <body>
    <div id="page">
      <div id="entete">
        <img src="./images/logo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
        <h1>Gestion des visites</h1>
      </div>