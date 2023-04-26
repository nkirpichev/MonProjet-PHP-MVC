
<?php
    
    echo "<h2>list des comptes</h2>";
    
    foreach($Comptes as $cl){

        echo "Compte de - ".$cl->clNom." ".$cl->clpreNom."<br> Nom - ".$cl->nom."<br> IBAN - ".$cl->numCompte."<br> Solde - ".$cl->solde."<br><br>";
  
    }  
?>

