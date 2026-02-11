<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>R3 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1 class="titulo">R3 1</h1>
<section class="contenedor">
    <form method="GET" action="funciones1.php">
        <section class="input">
            <label for="elige">Elige una función</label>
            <select name="elige" id="elige">
                <option value="1">ordenar</option>
                <option value="2">saludar a Dora</option>
                <option value="3">saludar a Napoleón</option>
                <option value="4">Sumar</option>
                <option value="5">Números pares</option>
            </select>
        </section>
        <section class="input">
            <label for="sum1">Sumando 1</label>
            <input type="number" name="sum1" id="sum1">
        </section>
        <section class="input">
            <label for="sum2">Sumando 2</label>
            <input type="number" name="sum2" id="sum2">
        </section>
        <section class="input">
            <input type="submit" value="enviar">
        </section>

    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET["elige"])){
            if($_GET["elige"]==1){
                ordenar();
            }
            if($_GET["elige"]==2){
                saludar('Dora');
            }
            if($_GET["elige"]==3){
                saludar('Napoleón');
            }
            if($_GET["elige"]==4){
                $suma = sumar($_GET["sum1"],$_GET["sum2"]);
                echo "<h1 class='respuesta'>$suma</h1>";
            }
            if($_GET["elige"]==5){
                if (!isset($_POST["0"])) {
                    echo '<form action="funciones1.php" method="POST">';
                    for ($i = 0; $i <= 4; $i++) {
                        echo "<section class='input'>";
                        echo "<label for='valor$i'>valor $i </label>";
                        echo "<input type='number' name='valor$i' id='valor$i'>";
                        echo "</section>";
                    }
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                }
            }
        }else{
            if (isset($_POST["valor0"])) {
                $vector = array($_POST["valor0"], $_POST["valor1"], $_POST["valor2"], $_POST["valor3"], $_POST["valor4"]);
                $suma = 0;
                foreach ($vector as $key => $value) {
                    if (esPar($value)) {
                        $suma = sumar($suma, $value);
                    }
                }
                echo "<h1 class='respuesta'>$suma</h1>";
            }
        }
        function ordenar(){
            echo "<h1 class='respuesta'>Por favor aléjese del cuadro</h1>";
        }

        function aumentar(&$num){
            $num = $num + 1;
        }

        function saludar($saludado)
        {
            echo "<h1 class='respuesta'>Hola $saludado</h1>";
        }

        function sumar($sum1, $sum2){
            return $sum1+$sum2;
        }

        function esPar($numero){
            return $numero % 2 == 0;
        }
        //echo sumar(2,2);
        ?>
</section>
    <section class="policia">
        <img src="police_2_color.png" alt="Police color" height="300" width="200">
    </section>
</body>
</html>
