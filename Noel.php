<?php

$anne = date('y');
$noel = mktime(8, 0, 0, 12, 25, ++$annee); 

if(noel < time())
$noel = mktime(8, 0, 0, 12, 25, ++$annee);

$tps_restant = $noel - time();

$i_restantes = $tps_restant / 60;
$H_restantes = $i_restantes / 60; 
$d_restants = $H_restantes / 24;



$s_restantes = floor($tps_restant % 60); // Secondes restantes
$i_restantes = floor($i_restantes % 60); // Minutes restantes
$H_restantes = floor($H_restantes % 24); // Heures restantes
$d_restants = floor($d_restants); // Jours restants 

setlocale(LC_ALL, 'fr_fr'); 

echo 'Il reste exactement <strong>'. $d_restants .' jours</strong> <strong>'. $H_restantes .' heures</strong>'
    . ' <strong>'. $i_restantes .' minutes</strong> et <strong>'. $s_restantes .'s</strong> avant d\'ouvrir les cadeaux :D ' ; 

   

    echo 'Nous sommes le '. strftime('<strong>%d %B %Y</strong> et il est <strong>%Hh%M</strong>') .'<br />'

?>