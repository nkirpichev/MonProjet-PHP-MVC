
    <?php
        session_start();
        
        include "vue/header.php";

        if(isset($_REQUEST["action"]))
            $action = $_REQUEST["action"];
        else
            $action = "accueil";

        switch($action){

           case "accueil":  
                include "vue/accueil.php";
                break;

            case "comptes":  
                require_once ("modele/class.pdoAuthentification.inc.php");
                if(isset($_REQUEST["idclient"])) {
                    $Comptes = ComptesDao::getUnCompte($_REQUEST["idclient"]) ;
                    $_SESSION["idClient"] = $_REQUEST["idclient"];
                    }
                else{
                    unset($_SESSION["idClient"]);
                    $Comptes = ComptesDao::getLesComptes() ;
                }
                include "vue/comptes.php";
                break;

            case "clients":  
                require_once ("modele/class.pdoAuthentification.inc.php");
                $Clients = ClientsDao::getLesClients() ;
                
                include "vue/clients.php";
                break;

            case "creercompte":  

                    $idClient = $_REQUEST["idclient"]; 
                    $_SESSION["idClient"] = $idClient;
                    include "vue/creercompte.php";
                    break;
            case "deletecompte":  

                    $idCompte = $_REQUEST["idcompte"]; 
                    require_once ("modele/class.pdoAuthentification.inc.php");
                    ComptesDao::deleteCompte($idCompte);
                    if(isset($_SESSION["idClient"])) $Comptes = ComptesDao::getUnCompte($_SESSION["idClient"]) ;
                        else $Comptes = ComptesDao::getLesComptes() ;

                    include "vue/comptes.php";
                    break;
    
            case "ajouter":         
                    require_once ("modele/class.pdoAuthentification.inc.php");
                    require_once ("modele/Compte.php");
                    $nom =  $_REQUEST["nom"];
                    $solde = $_REQUEST["solde"];
                    $numCompte =  $_REQUEST["numCompte"];
                    $idClient =  $_SESSION["idClient"];
                    
                    $unCompte = new Compte($nom, $solde, $numCompte, $idClient) ;

                    ComptesDao::creerCompte($unCompte) ;

                    include "vue/aprescreer.php";
                    break;
              
        }


        include "vue/footer.php";
    ?>

