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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <section class='bottoni'>
           <a class='button-menu' href='index.php'>Home</a>
           <a class='button-menu' href='login.php'>Accedi!</a> 
           <a class='button-menu' href='logout.php'>Disconettiti!</a>
        </section>   
    </header>
    <main>
        <section class='credenziali'>
            <form action="./index.php" method="$_GET">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
                <button type="submit">Login</button>
            </form>
        </section>
    </main>   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>