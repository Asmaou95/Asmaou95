<?php
//echo "progamme php !";
$name = 'asma'; // string
//$email = "asma@gmail.com"; // string
$age = 54; // integer
$bool = true; //booléen
$array = ['Maurice', 'Georgette', 'odile']; //array
$null = null;
//$null = '';
//echo $age . ' ' . $name . ' ' . $email;// affiché concatener
// $objet = {};
//$age ++;
//echo $age + $array[2]; affiché 2 truc
//var_dump($array, $age);  affiché pour chequé
/*if ($age < 18){
    echo "tu est mineur.";
} else{
    echo "tu est majeur";
} */
/*echo "je m'appel $name! ma phrase préferer c'est \"attention à l'indentation!\" ";
echo '<br>';
echo 'je m\'appelle asma!';*/
$a = 0;
// boucle while
while ($a <= 10){
    echo $a;
    echo '<br>';
    $a++;
}
//boucle for
//for ($i=0; i < count($array); $i++){
    //echo "<p>$array[$i]</p>";
//}

// boucle foreach  $key pour récuperer les indice
foreach ($array as $key => $value){
    echo "<p>$value à la clé $key</p>";
}







