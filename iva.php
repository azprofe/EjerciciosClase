<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>R3 2 IVA</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
    <h1 class="titulo">R3 2 IVA</h1>
    <section class="contenedor">
    <form method="GET" action="iva.php">
        <section class="formulario">
            <label for="iva">Introduce el IVA a aplicar:</label>
            <input type="number" id="iva" name="iva">
        </section>
        <section class="formulario">
            <label for="precio1">Precio 1:</label>
            <input type="number" id="precio1" name="precio1">
        </section>
        <section class="formulario">
            <label for="precio2">Precio 2:</label>
            <input type="number" id="precio2" name="precio2">
        </section>
        <section class="formulario">
            <label for="precio3">Precio 3:</label>
            <input type="number" id="precio3" name="precio3">
        </section>
        <section class="formulario">
            <input type="submit" value="Calcular IVA">
        </section>
    </form>
    </section>
        <section class="contenedor">
            <?php
                if(isset($_GET["iva"])&&isset($_GET["precio1"])&&isset($_GET["precio2"])&&isset($_GET["precio3"])){
                    $iva = $_GET["iva"]/100;
                    function calcularIVA($precio){
                        global $iva;
                        return $precio+$precio*$iva;
                    }
                    echo "<h1 class='respuesta'>Precio 1 =". calcularIVA($_GET["precio1"])."</h1>";
                    echo "<h1 class='respuesta'>Precio 2 =". calcularIVA($_GET["precio2"])."</h1>";
                    echo "<h1 class='respuesta'>Precio 3 =". calcularIVA($_GET["precio3"])."</h1>";

                }
                ?>
        </section>
    </body>
</html>
