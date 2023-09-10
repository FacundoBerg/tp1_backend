<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
<h1>TP1 de Berg Facundo</h1>
    <h3>Ejercicio 1</h3>
    <?php
    echo "Hola Mundo";
    echo "<h3>Ejercicio 2</h3>";
    $saludoDePotreroDigital="<p>Hola Mundo </p>\n  ";
    echo $saludoDePotreroDigital;
    echo "<h3>Ejercicio 3</h3>";
    $numero1=8;
    $numero2=32;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $division=$numero1/$numero2;
    $resto=$numero1%$numero2;
        echo "<p>Los numeros son $numero1 y $numero2, el resultado de la suma es $suma, el resultado de la resta es $resta, el resultado de division es $division y el resto es $resto</p>\n";
    echo "<h3>Ejercicio 4</h3>";
        $gradosCelsius=20;
    $convertidoEnFarenheit=$gradosCelsius*1.8+32;
    echo "<p>Si paso $gradosCelsius grados Celsius a grados Farenheit me quedarian $convertidoEnFarenheit grados Farenheit</p>\n";
    echo "<h3>Ejercicio 5</h3>";
    $baseRectangulo=18;
    $alturaRectangulo=12;
    $areaRectangulo=$baseRectangulo*$alturaRectangulo;
    $perimetroRectangulo=2*($baseRectangulo+$alturaRectangulo);
    $radioCirculo=30;
    $areaCirculo=3.14*pow($radioCirculo,2);
    $perimetroCirculo=2*3.14*$radioCirculo;
    echo "<p>Perimetro del circulo: " . $perimetroCirculo . " cm</p>\n";
    echo "<p>Area del circulo: " . $areaCirculo . " cm2</p>\n";
    ?>
</body>
</html>