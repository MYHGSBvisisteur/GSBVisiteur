<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Application Laboratoire Galaxy-Swiss Bourdin</title>
    <SCRIPT LANGUAGE="JavaScript" type="text/javascript">
	function getXhr(){
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest();
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
			}
        function go(){
                getXhr();
                // On défini ce qu'on va faire quand on aura la réponse
                xhr.onreadystatechange = function(){
                        // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
                        if(xhr.readyState == 4 && xhr.status == 200){
                                leselect = xhr.responseText;
                        }
                }

                // Ici on va voir comment faire du post
                xhr.open("POST","/include/coeffAjax.php",true);
                // ne pas oublier ça pour le post
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                // ne pas oublier de poster les arguments
                // ici, l'id du client
                sel = document.getElementById('cli');
                idcli = sel.options[sel.selectedIndex].value;
                xhr.send("idcli="+idcli);
        }
        
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
    
  </head>
  <body>
    <div id="page">
      <div id="entete">
        <img src="./images/logo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
        <h1>Gestion des visites</h1>
      </div>