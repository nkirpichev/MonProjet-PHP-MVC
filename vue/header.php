<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK Nikolai</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://getbootstrap.com/docs/5.3/examples/headers/headers.css" rel="stylesheet" >
    <script src="js/banque.js"></script>
</head>
<body>


<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php?action=accueil"  class="nav-link active" aria-current="page">Accueil</a></li>
        <li class="nav-item"><a href="index.php?action=clients"  class="nav-link">Clients</a></li>
        <li class="nav-item"><a href="index.php?action=comptes"  class="nav-link">Comptes</a></li>
      </ul>
    </header>
  </div>

  <?php
   $action = $_REQUEST["action"];  
   echo "<script>ChangeColor('".$action."')</script>" ?>

