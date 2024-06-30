<?php

$utenti =[
    [
        'username' => 'geralt_di-rivia',
        'password' => 'yennefer'

    ],
    [
        'username' => 'nick_valentine',
        'password' => 'dogmeat'

    ],
    [
        'username' => 'panam-palmer',
        'password' => 'aldecaldos'

    ],
    [
        'username' => 'kassandra',
        'password' => 'setta-di-cosmos'

    ],
   
];
session_start();
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section class='bottoni'>
           <a class='button-menu' href='index.php'>Home</a>
           <a class='button-menu' href='login.php'>Accedi!</a> 
           <a class='button-menu' href='logout.php'>Disconettiti!</a>
        </section>   
    </header>
    
</body>
</html>