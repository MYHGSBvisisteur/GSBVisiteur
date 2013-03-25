<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application exempleMVC du cours sur la bdd bddemployés
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdo qui contiendra l'unique instance de la classe
 * @package default
 * @author AP
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gsb_visiteurs';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;
        private static $monPdo;
	private static $monPdoGsb=null;

/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
        try {
    	PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
		PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
	
        } catch (Exception $e) {
            throw new Exception("Erreur Ã  la connexion \n" . $e->getMessage());
        }
        }

	public function _destruct(){
		PdoGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe PdoExemple
 
 * Appel : $instancePdoExemple = PdoExemple::getPdoExemple();
 
 * @return l'unique objet de la classe PdoExemple
 */
	public  static function getPdoGsb(){
		if(PdoGsb::$monPdoGsb==null){
			PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;  
	}
   public function getInfosVisiteur($login,$mdp){
       // retourne un tableau associatif contenant le visiteur
         $req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = '$login' and MDP = '$mdp'";
       //$req="select VIS_MATRICULE, VIS_NOM ,VIS_PRENOM from visiteur where LOGIN = 'test' and MDP = 'test'";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch(PDO::FETCH_ASSOC);
		return $ligne;
        }
        
   public function getLesVisiteurs() {
     // retourne un tableau associatif contenant tous les visiteurs
         $req="select vis_matricule, VIS_NOM, VIS_VILLE from visiteur";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
        // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /*public function getLesCR($idVisiteur) {//Slect que les données dont on a besoin pour consulter un CR. Pra_Num présent dans praticien et rapportVsite donc alias
     // retourne un tableau associatif contenant toutes les données des comptes rendus rassemblé par num de rapport
         $req="SELECT R.RAP_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF, P.PRA_NUM, PRA_NOM, PRA_COEFNOTORIETE, MED_NOMCOMMERCIAL
               FROM rapport_visite R, praticien P, medicament M, offrir O
               WHERE P.PRA_NUM = R.PRA_NUM 
               AND  O.MED_DEPOTLEGAL = M.MED_DEPOTLEGAL
               AND VIS_MATRICULE = '$idVisiteur'
               GROUP BY R.RAP_NUM";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
        // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }*/
    public function getLesCR() {//Slect que les données dont on a besoin pour consulter un CR. Pra_Num présent dans praticien et rapportVsite donc alias
     // retourne un tableau associatif contenant toutes les données des comptes rendus rassemblé par num de rapport
         $req="SELECT R.RAP_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF, P.PRA_NUM, PRA_NOM, PRA_COEFNOTORIETE, MED_NOMCOMMERCIAL
               FROM rapport_visite R, praticien P, medicament M, offrir O
               WHERE P.PRA_NUM = R.PRA_NUM 
               AND  O.MED_DEPOTLEGAL = M.MED_DEPOTLEGAL
               GROUP BY R.RAP_NUM";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
        // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getLesNumCR($idVisiteur) {
        // retourne un tableau associatif contenant tous les comptes rendus
         $req="SELECT Max(RAP_NUM) as 'MaxNumRapport'
               FROM rapport_visite
               WHERE VIS_MATRICULE = '$idVisiteur'";
         $rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
                // ou return $this->_pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
     }
     
    public function insererLesCR($idVisiteur, $num, $numPra, $date, $bilan, $motif, $remplacant, $doc){
     // insère le compte rendu saisi dans la bd
         $req="INSERT INTO rapport_visite(VIS_MATRICULE, RAP_NUM, PRA_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF, RAP_REMPLACANT, RAP_DOC)
             VALUES ('$idVisiteur', '$num', '$numPra', '$date', '$bilan', '$motif', '$remplacant', '$doc')";
         $rs = PdoGsb::$monPdo->query($req);
    }
    
    public function testDate($value){
		if(preg_match('`^\d{1,2}/\d{1,2}/\d{4}$`', $value)==TRUE){
                    return true;
                }
    }
    
    public function insererLesEchantillons($idVisiteur, $num, $medoc, $qte){
     // insère le compte rendu saisi dans la bd
         $req="INSERT INTO rapport_visite(VIS_MATRICULE, RAP_NUM, MED_DEPOTLEGAL, OFF_QTE)
             VALUES ('$idVisiteur', '$num', '$medoc', '$qte')";
         $rs = PdoGsb::$monPdo->query($req);
    }
    
     public function getLesMedicaments() {
     // retourne un tableau associatif contenant tous les informations sur tous les médicaments
         $req="select * from medicament ";
         $rs = PdoGsb::$monPdo->query($req);
	 $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
         return $ligne;
    }

    public function getLesInfosPraticiens(){
            // retourne les infos d'un praticien défini dans l'énoncé §les praticiens
            $req ="select PRA_NOM,PRA_PRENOM,PRA_ADRESSE,PRA_VILLE,PRA_COEFNOTORIETE,TYP_LIBELLE,TYP_LIEU,PRA_NUM
                   from praticien p, type_praticien t
                   where p.TYP_CODE = t.TYP_CODE
                   order by PRA_NOM";
            $rs = PdoGsb::$monPdo->query($req);
	    $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }
        //Trier par ville pour l'affichage
        public function getLesInfosPraticiensParVille(){
            $req ="select PRA_NOM,PRA_PRENOM,PRA_ADRESSE,PRA_VILLE,PRA_COEFNOTORIETE,TYP_LIBELLE,TYP_LIEU,PRA_NUM
                   from praticien p, type_praticien t
                   where p.TYP_CODE = t.TYP_CODE
                   order by PRA_VILLE";
            $rs = PdoGsb::$monPdo->query($req);
	    $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
            return $ligne;
        }
        public function getInfosPraticien($idPraticien){
            $req ="select PRA_NOM,PRA_PRENOM,PRA_ADRESSE,PRA_VILLE,PRA_COEFNOTORIETE,TYP_LIBELLE,TYP_LIEU
                   from praticien p, type_praticien t
                   where PRA_NUM = $idPraticien
                   and p.TYP_CODE = t.TYP_CODE";
            
            $rs = PdoGsb::$monPdo->query($req);
	    $ligne = $rs->fetch();
            return $ligne;
        }
}
  ?>
