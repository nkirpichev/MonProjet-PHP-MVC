<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application Banque en ligne.
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoAuth qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Salim
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoAuth{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=banque';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
        private static $monPdo;
		private static $monPdoAuth=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoAuth::$monPdo = new PDO(PdoAuth::$serveur.';'.PdoAuth::$bdd, PdoAuth::$user, PdoAuth::$mdp); 
      
		PdoAuth::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoAuth::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoGsb = PdoAuth::getPdoAuth();
 
 * @return 
 * un objet de la classe PdoAuth
 */
	public  static function getPdoAuth(){
		if(PdoAuth::$monPdoAuth==null){
			PdoAuth::$monPdoAuth= new PdoAuth();
		}
		return PdoAuth::$monPdoAuth;  
	}
        
        public  static function getMonPdo(){
		
		return PdoAuth::$monPdo;  
	}

 
}
 

class ClientsDao {

	public static function getLesClients(){ 

		try {
   
		$clients = array();
		$req = "Select * from clients order by nom";

		$monPdoAuth = PdoAuth::getPdoAuth();

		$rs = $monPdoAuth::getMonPdo()->prepare($req) ;
		$rs->setFetchMode(PDO::FETCH_OBJ);
		$rs->execute() ;

		$clients = $rs->fetchAll();
		return $clients;

		} 
		catch (PDOException $e) {
   
    		echo 'Échec lors de la connexion : ' . $e->getMessage();
		}


    }
 
}

class ComptesDao {

	public static function getLesComptes(){ 

		try {
   
		$comptes = array();
		$req = "Select c.*, cl.nom as clNom, cl.prenom as clpreNom  
			from Comptes C 
			inner join Clients cl on  C.idClient = Cl.idClient 
			order by cl.nom";

		$monPdoAuth = PdoAuth::getPdoAuth();

		$rs = $monPdoAuth::getMonPdo()->prepare($req) ;
		$rs->setFetchMode(PDO::FETCH_OBJ);
		$rs->execute() ;

		$comptes = $rs->fetchAll();
		return $comptes;

		} 
		catch (PDOException $e) {
   
    		echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
    }
	
	public static function getUnCompte($idClient){ 

		try {
   
		$comptes = array();
		$req = "Select c.*, cl.nom as clNom, cl.prenom as clpreNom  
			from Comptes C 
			inner join Clients cl on  C.idClient = Cl.idClient 
			where C.idClient = ".$idClient."
			order by cl.nom";

		$monPdoAuth = PdoAuth::getPdoAuth();

		$rs = $monPdoAuth::getMonPdo()->prepare($req) ;
		$rs->setFetchMode(PDO::FETCH_OBJ);
		$rs->execute() ;

		$comptes = $rs->fetchAll();
		return $comptes;

		} 
		catch (PDOException $e) {
   
    		echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
    }
	public static function creerCompte($unCompte)  {
   	
		 try {
 			$req="insert into comptes(idClient,nom,solde,numCompte) values('".htmlspecialchars($unCompte->getidClient())."','".htmlspecialchars($unCompte->getNom())."','".htmlspecialchars($unCompte->getSolde())."','".htmlspecialchars($unCompte->getnumCompte())."')"; 
	  
			echo $req ;
			$monPdoAuth = PdoAuth::getPdoAuth();
			$rs = $monPdoAuth::getMonPdo()->prepare($req) ;
			$rs->execute() ;
		} 
		catch (PDOException $e) {
	   
			echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
	}	
	
	public static function deleteCompte($idCompte)  {
   	
		try {
			$req="delete from comptes where numCompte =" .htmlspecialchars($idCompte).""; 
	 
		   //echo $req ;
		   $monPdoAuth = PdoAuth::getPdoAuth();
		   $rs = $monPdoAuth::getMonPdo()->prepare($req) ;
		   $rs->execute() ;
	   } 
	   catch (PDOException $e) {
	  
		   echo 'Échec lors de la connexion : ' . $e->getMessage();
	   }
   }
}
    
    
  

    
    
  
