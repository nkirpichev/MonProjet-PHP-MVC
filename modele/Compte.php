<?php

Class Compte {
   
    private $nom;
    private $solde;
    private $numCompte;
    private $idClient;

    public function __construct($nom,$solde,$numCompte,$idClient){
        $this->nom = $nom;
        $this->solde = $solde;
        $this->numCompte = $numCompte ;
        $this->idClient = $idClient ;

    }  
    public function getNom() {
    
        return ($this->nom) ;
    }
    
    public function getSolde(){
        
        return ($this->solde) ;
    }
    
    public function getnumCompte() {
        
        return ($this->numCompte) ;
    }
    
    public function getidClient() {
        
        return ($this->idClient) ;
    }

}
    