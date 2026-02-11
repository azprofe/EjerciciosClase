<?php
    $tazaNapoleon = 'Taza vacía';

    function llenarTaza(&$pablo){
        return $pablo='taza llena';
    }

    echo "<h1>Taza original $tazaNapoleon</h1>";
    echo "<h1>Taza llena ".llenarTaza($tazaNapoleon)."</h1>";
    echo "<h1>Taza no original $tazaNapoleon</h1>";
    $tazaNapoleon = 'Taza vacía de nuevo';
    echo "<h1>Taza 3: $tazaNapoleon</h1>";

    $num = 7;

    function pintaNumero()
    {
         $num = 8;
        echo "<h1>Variable local: $num</h1>";
    }

    pintaNumero();
    echo "<h1>Global: $num</h1>";