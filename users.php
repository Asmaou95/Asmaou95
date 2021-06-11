<?php
//un nom, couleur préferer, un age
$users =[
    ['paulette', 'rouge', 85],
    ['Martin', 'bleu', 12],
    ['Octarine', 'orange', 30]
];
//var_dump ($users); //pour affiché plusieur tableau
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/users.css">

</head>
<body>
<header>
        <nav id ="navbar">
                <ul class="liste">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="index.html">Utilisateurs</a></li>
                </ul>
        </nav>
    </header>

    <main>
        <h1>Mon tableau</h1>
    <table>
        <tr>
            <th>nom</th>
            <th>couleur</th>
            <th>age</th>
        </tr>
        
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user[0] ?></td>
                <td><?= $user[1] ?></td>
                <td><?= $user[2] ?></td>
            </tr>
        <?php endforeach ?> 
    </table>




    </main>
    <footer>
    <nav>
            <ul class="liste2">
                <li><a href="">A propos</a></li>
    </ul>
        </nav>
    </footer>
</body>
</html>