<?php
    
    echo "<h2>list des clients</h2>";
    
    foreach($Clients as $cl){

        echo $cl->nom."<br>".$cl->prenom."<br>".$cl->email."<br>";
        echo "<a href=index.php?action=creercompte&idclient=".$cl->idClient.">Ajouter un compte</a><br>"."<br>"; 

    }  
?>

