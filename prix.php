<?php
$prix1 = (float)readline("Entrez le prix du premier produit: ");
$prix2 = (float)readline("Entrez le prix du deuxième produit: ");
$prix3 = (float)readline("Entrez le prix du troisième produit: ");

$prix_max = $prix1;

if ($prix2 > $prix_max) {
    $prix_max = $prix2;
}
if ($prix3 > $prix_max) {
    $prix_max = $prix3;
}

echo "Le prix le plus élevé est: " . number_format($prix_max, 2) . "\n";?>