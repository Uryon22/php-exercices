<?php

### 1. Travaux pratiques sur des tableaux

$entries = [8,44,100,61,50,20,100,150,80,4,0,55];

# 1. Afficher tous les éléments d'un tableau
function displayArray(array $array) {
    if (empty($array)) return;
    echo "Affichage des éléments du tableau \n";
    foreach($array as $element) {
        echo $element . "\n" ;
    }
}



# 2. Calculer la moyenne des nombres contenus dans un tableau donné
function getAverageArrayInt(array $array){
    if (empty($array)) return;
    $sum = 0;
    foreach($array as $element) {
        $sum += $element;
    }
    $average = $sum / count($array);
    echo "Moyenne du tableau : " . $average . "\n";
}




# 3. indiquer combien d'éléments sont supérieurs ou égaux à 50
function greaterThanOrEqualTo(int $number, array $array) {
    if (empty($array)) return;
    $count = 0;
    foreach($array as $element) {
        if ($element < $number) continue;
        $count++;
    }
    echo "Nombre de valeur supérieur ou égal à " . $number . " : " . $count . "\n";
}




# 4. Tester si la valeur 100 est présente ou non
function hasValue(int $number, array $array) {
    if (empty($array)) return;
    $boolean = false;
    foreach ($array as $element) {
        if ($element != $number) continue;
        $boolean = true;
    }
    $response = $boolean ? "Oui" : "Non";
    echo "La valeur renseignée est-elle présente dans le tableau ? " . $response . "\n";
}




# 5. Determiner la meilleure valeur obtenue
function getHighestValue(array $array) {
    if (empty($array)) return;
    $highest = 0;
    foreach($array as $element) {
        if ($element > $highest) {
            $highest = $element;
        }
    }
    echo "La valeur la plus haute est : " . $highest . "\n";
}

## 1
//displayArray($entries);
##

## 2
//getAverageArrayInt($entries);
##

## 3
//greaterThanOrEqualTo(50, $entries);
##

## 4
//hasValue(100, $entries);
##

## 5
//getHighestValue($entries);
##
?>