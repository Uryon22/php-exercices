<?php
require("./exercice1.php");
### 2. Algorithmes avancés sur les tableaux

$entries = [8,44,61,50,6,20,100,67,150,80,4,0,55,9,37];

# 1. Proposer une méthode générale pour rechercher un élément dans un tableau
function findInArray(int $element, array $array) {
    foreach($array as $key => $value) {
        if ($element == $value) {
            echo "L'index de l'élément recherché est : " . $key . "et sa valeur est de : " . $value . "\n" ;
            return;
        }
    }
    echo "L'élément n'existe pas dans le tableau \n";
}

# 2. Modifier votre code pour prendre en compte que les tableaux considérés sont ordonnés de manière croissante
function findInSortedArray(int $element, array $array) {
    foreach($array as $key => $value) {
        if ($element < $value) {
            continue;
        } elseif ($element == $value) {
            echo "L'index de l'élément recherché est : " . $key . " et sa valeur est de : " . $value . "\n";
            return;
        }
    }
}

# 3. Dans ce même cadre, implémenter une recherche dichotomique
function findInSortedArrayWithDichotomie(int $element, array $array) {
    $foundElement = false;
    $min = 0;
    $max = count($array) - 1;
    while(!$foundElement && $min <= $max) {
        $middle = floor(($min + $max) / 2);
        if ($element == $array[$middle]) {      // Cas où l'element correspond au milieu
            $foundElement = true;
        } elseif ($element < $array[$middle]) { // Cas où nous sommes sur la partie gauche du tableau (soit inférieur)
            $max = $middle - 1;
        } elseif ($element > $array[$middle]) { // Cas où nous sommes sur la partie droite du tableau (soit supérieur)
            $min = $middle + 1;
        }
    }
    // Condition d'affichage
    if ($foundElement) {
        echo "L'élément a été trouvé à l'index : " . $middle . "\n";
    } else {
        echo "L'élément n'existe pas. \n";
    }

}

# 4. Programmer un tri à bulles
function triABulles(array &$array) {
    // Réduction de la longueur du tableau, une fois l'échange des valeurs effectué, nous sommes sûr que la valeur max se
    // trouve à length, donc on passe à length - 1
    for($i = count($array) - 1; $i > 0; $i--) {
        // Optimisation du tri, afin d'effectuer le minimum d'itération de $i (ne pas parcourir le tableau déjà trié)
        $sortedArray = true;
        // Parcours du tableau en partant de 0 vers length - 1, afin de placer la valeur max de cette range à l'index le plus haut
        for($j = 0; $j <= $i -1; $j++) {
            if ($array[$j+1] < $array[$j]) {
                $save = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $save;
                $sortedArray = false;
            }
        }
        if ($sortedArray) return;
    }
}

# 5. Implémenter le tri insertion
function triParInsertion(array &$array) {
    // Parcours du tableau classique
    for($i = 1; $i <= count($array) - 1; $i++) {
        // Sauvegarde de la valeur à trié
        $toSort = $array[$i];
        $j = $i;
        // Copie de la valeur j - 1 vers la droite ($j)
        while($j > 0 && $array[$j - 1] > $toSort) {
            $array[$j] = $array[$j - 1];
            $j--;
        }
        // Affectation de la variable à trier
        $array[$j] = $toSort;
    }
}
## 1
//findInArray(45544, $entries);
##

## 2
sort($entries);
findInSortedArray(37, $entries);
##

## 3
//sort($entries);
//findInSortedArrayWithDichotomie(61, $entries);
##

## 4
//triABulles($entries);
//displayArray($entries);
##

## 5
//triParInsertion($entries);
//displayArray($entries);
##
?>