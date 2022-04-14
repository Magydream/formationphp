<?php

 /**
  * Fonction qui calcule le carré d'un nombre
  *
  *@param float $param valeur à mettre au carré
  *@return float le paramètre au carré
  */
 function carre(float $param):float{
     return $param * $param;
 }

 /**
  * Retoune la factorielle d'un nombre
  */
 function factorielle($param){
    $facto = 1;
    while ($param > 0){
        $facto = $facto * $param;
        $param --;
    }
    return $facto;
 }

 /**
  * Renvoie si un nombre est pair ou impair
  */
 function estPair($param){
if(!($param % 2)){
    echo "$param est pair";
    return ;
}
    echo "$param est impair";

 }
/**
 * Retoune la multiplication des nombre en paramètres
 */
 function multiplie(...$params){
    if(count($params) === 0) {
        echo "Il n'y a pas de paramètres";
        return null;
    }
    $return = 1;
    foreach ($params as $param){
        $return = $return*$param;
    }
    return $return;
 }