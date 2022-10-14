<!---1.	Créer et initialiser deux nombres, calculer leur addition et afficher « l’addition du nombre 1 et du nombre 2 est égale à _____.--->


<?php 

$nbr1 = 10;
$nbr2 = 25;

echo "l’addition du nombre " . $nbr1 . " et du nombre " . $nbr2 . " est égale à " . $nbr1 + $nbr2;

?>

<br><br>


<!---Quels sont les différents types de données en PHP et l’illustrer en définissant une variable de chaque type--->

<?php 

$name = "nom";

$age = 20;

$poid = 55.5;

$booleen = true;

$valeur = null;

$tableau = ['truc', 'bidule', 3, true];


$recette = [
    'name' => 'gateau',
    'nbrIngredients' => 6,
    'cuisson' => 1.30,
    'sansSucre' => false,
    'null' => NULL,
];


?>

<br><br>

<!---  Créer deux variables :

a. isActive, de type booléan initialisée à ‘false’

b. genre, de type chaine de caractère initialisée à ‘Troll’

c. Faire un test qui affiche « Le compte du personnage troll est actif. », 

si l’état du compte est actif et si c’est un troll; « Le compte du personnage troll est inactif. » 
si c’est inactif et si c’est un troll; --->

<?php 

$isActive = true;
$genre = "Troll";



if ($isActive == true && $genre == "Troll") {

    echo "Le compte du personnage troll est actif.";
} 
else {

    echo "Le compte du personnage troll est inactif.";
}

?>
<br><br>


<!---  Déterminer si un nombre est pair ou impair. Et refaire la même chose mais avec une condition ternaire. --->

<?php 


if ($age % 2 == 1)
{
   echo "$age est impair";
}
elseif ($age % 2 == 0) {

   echo "$age est pair";
}

?>


<br><br>

<!---  Vérifier si un nombre est un multiple de 3 et de 5. --->
<?php

if ($age % 3 || 5 == 0) {

    echo "$age est un multiple de 3 ou 5";
} 
else {

    echo "$age n'est PAS un multiple de 3 ou 5";
}

?>

<br><br>

<!--- Calculer la valeur absolue d’un nombre ex (-5 = 5 ; 1 = 1) --->
<?php

$absolue = -5;

$abs = abs($absolue);

echo "la valeur absolue de " . $absolue . " est " . $abs;

?>

<br><br>

<!--- Afficher le jour de la semaine en lettres en fonction du nombre  --->

<?php

$semaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

echo $semaine[0] . " des patates, " . $semaine[1] .  " des patates, " . $semaine[2] . " des patates aussi 🎵 🎶 " ;

?>


<br><br>

<!--- Créer une fonction qui reçoit 2 nombres en paramètres et affiche tous les nombres entre les deux nombres donnés en paramètres.  --->

<?php



$nbrs = [1, 10]

?>


<!--- Créer une fonction qui prend 4 paramètres. 

Afficher un message qui vérifie si la somme des 2 premiers paramètres est supérieure, 

inférieure ou égale à la multiplication des deux derniers paramètres  --->
<br><br>
<br><br>
<br><br><h2> CORRECTIONS</h2>
<!-----correction --------->

<?php

$somme1 = 1;
$somme2 = 2;
$somme3 = 3;
$somme4 = 4;

$resultat1 = $somme1 + $somme2;
$resultat2 = $somme3 * $somme4;


echo $resultat1 . "<br>" . $resultat2;


function estEgale($resultat1, $resultat2) {


    if ($resultat1 == $resultat2) {
        echo "resultats differents";

    } else {
        echo "resultats égales";
    }

}

?>

<p>--------------------------------------------------------------</p>

<!--- Créer une fonction qui reçoit 2 nombres en paramètres et affiche tous les nombres entre les deux nombres donnés en paramètres.  --->
<?php


function interval ($nbr1, $nbr2) {

    $nbr1++;
    for ($i = $nbr1; $i < $nbr2; $i++){

        echo $i . "<br>";
    }
}

interval(0, 12);
echo "<br>";

function interval2 ($nbr1, $nbr2){
    $nbr2++;
    foreach(range($nbr1, $nbr2, 3) as $result) {

        echo $result . "<br>";
    } 
}

interval2(0, 22);
?>

<br><br>
<!-----correction --------->

<!--- Créer une fonction qui reçoit 2 nombres en paramètres et affiche tous les nombres entre les deux nombres donnés en paramètres.  --->
<?php

