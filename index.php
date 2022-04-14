<?php
/**
 * Les fichiers de script dont j'ai besoin
 */
include_once "./fonctions/math.php";
include_once "./fonctions/readline.php";

/**
 * Programme principal
 */
$result = readline("Entez votre nombre : ");

echo carre($result).PHP_EOL;
echo factorielle($result).PHP_EOL;
echo estPair($result).PHP_EOL;
echo multiplie().PHP_EOL;