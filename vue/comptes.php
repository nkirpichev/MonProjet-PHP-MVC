
<?php
    
    echo "<h2>List des comptes</h2><table class='table'><th>Client</th><th>Nom de compte</th><th>IBAN</th><th>Solde</th><th></th>";
    
    foreach($Comptes as $cl){
        
        echo  "<tr><td>";
        echo $cl->clNom." ".$cl->clpreNom."</td><td>".$cl->nom."</td><td>".$cl->numCompte."</td><td>".$cl->solde."";
        echo "</td></tr>";
    }  
    echo "</table>";
?>

