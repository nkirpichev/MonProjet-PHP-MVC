<?php
    
    echo "<h2>Liste des clients</h2><table class='table'><th>Nom</th><th>Prenom</th><th>e-mail</th><th>Compte</th><th></th>";
    
    foreach($Clients as $cl){
        echo  "<tr><td>";

        echo $cl->nom."</td><td>".$cl->prenom."</td><td>".$cl->email."</td><td>";
        echo "<a href=index.php?action=creercompte&idclient=".$cl->idClient.">Ajouter un compte</a>"."</td><td>"; 
        echo "</td></tr>";
    }  
    echo "</table>";
?>

