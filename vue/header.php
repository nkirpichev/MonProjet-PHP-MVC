<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK Nikolai</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://getbootstrap.com/docs/5.3/examples/headers/headers.css" rel="stylesheet" >
    <link href="css/main.css" rel="stylesheet" >
    <script src="js/banque.js"></script>

</head>
<body>
<p> </p>
<div class="container px-4" >
    
<p class="fig "><img src="https://moneymakerfactory.ru/Pics/loads/multy_img-2-20215610.jpg" width="50%" alt=""></p>
<header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item px-3 w-40 "><a href="index.php?action=accueil"  class="nav-link active" aria-current="page">Accueil</a></li>
        <li class="nav-item px-3 w-40 "><a href="index.php?action=clients"  class="nav-link">Clients</a></li>
        <li class="nav-item px-3 w-40 "><a href="index.php?action=comptes"  class="nav-link">Comptes</a></li>
      </ul>
    </header>
 

  <?php
    $action = $_REQUEST["action"];  
    echo "<script>changeColor('".$action."')</script>" 
   ?>

