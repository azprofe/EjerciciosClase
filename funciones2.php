<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>R3 2</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
    <h1 class="titulo">R3 2</h1>
    <section class="contenedor">
    <form method="GET" action="funciones2.php">
        <section class="formulario">
            <label for="variable">Variable por referencia:</label>
            <input type="number" id="variable" name="variable">
        </section>
        <section class="formulario">
            <label for="numGlobal">Numero global:</label>
            <input type="number" id="numGlobal" name="numGlobal">
        </section>
        <section class="formulario">
            <input type="submit" value="Enviar">
        </section>
    </form>
    </section>
        <section class="contenedor">
            <?php

            function duplicaValor(&$num){
                $num = $num * 2;
            }
                if(isset($_GET["numGlobal"])&&isset($_GET["variable"])){

                    function pintNumGlobal(){
                        global $num;
                        echo "<h1 class='respuesta'>Función que usa el global = $num </h1>";
                    }
                    function pintNumLocal(){
                        $num = 7;
                        echo "<h1 class='respuesta'>num ámbito local = $num</h1>";
                    }
                    $valor = $_GET["variable"];
                    $num = $_GET["numGlobal"];
                    duplicaValor($valor);
                    echo "<h1 class='respuesta'>num duplicado = $valor</h1>";
                    echo "<h1 class='respuesta'>num ámbito global = $num</h1>";
                    pintNumLocal();
                    pintNumGlobal();

                }
                ?>
        </section>
    </body>
</html>
