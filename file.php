<?php
// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard', 60]];

// J'ajoute un mouton
$moutons[] = ['Gérard', 120];

// Je calcule la moyenne de la valeur de mes moutons
$sumValMoutons = array_sum(array_column($moutons, 1));
$moyValMoutons = $sumValMoutons / count($moutons);
echo "Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons . PHP_EOL;

// Ajout de 100 moutons aléatoires
for ($j = 0; $j < 100; $j++) {
    $randNameMouton = "";
    $nbCharsNameMouton = rand(3, 15);
    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSUTVWXYZ";
    $nbChars = strlen($chaine);
    $randValMoutons = rand(10, 200);
    for ($k = 0; $k < $nbCharsNameMouton; $k++) {
        $randNameMouton .= $chaine[rand(0, ($nbChars - 1))];
    }
    $moutons[] = [$randNameMouton, $randValMoutons];
}
echo PHP_EOL;
// Je calcule à nouveau la moyenne
$sumValMoutons = array_sum(array_column($moutons, 1));
$moyValMoutons = $sumValMoutons / count($moutons);
echo "<br>Moyenne de la valeur de mes " . count($moutons) . " moutons : " . $moyValMoutons;
 ?>