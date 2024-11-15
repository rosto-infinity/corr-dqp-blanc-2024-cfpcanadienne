<?php
$N = (int)readline("Entrez le nombre de participants: ");
$somme = 0;

for ($i = 1; $i <= $N; $i++) {
    $somme += $i;
}

echo "Le budget total estimé est: " . $somme . "\n";
