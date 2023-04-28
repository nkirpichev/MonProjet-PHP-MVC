
<?php
    
    echo "<h2>Liste des comptes</h2><table class='table table-striped'><th>Client</th><th>Nom de compte</th><th>IBAN</th><th>Solde</th><th>Supprimer</th>";
    $q = "eree";
    foreach($Comptes as $cl){
        
        echo  "<tr><td>";
        echo $cl->clNom." ".$cl->clpreNom."</td><td>".$cl->nom."</td><td>".$cl->numCompte."</td><td>".$cl->solde."</td><td>";
        echo "<a href=index.php?action=deletecompte&idcompte=".$cl->numCompte." onclick = 'return confirm()'>X</a>"."</td></tr><tr></tr>"; 
        //echo "</td></tr>";
    }  
    echo "</table>";
?>

