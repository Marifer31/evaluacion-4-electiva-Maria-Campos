<?php
if ($_POST ["valor1"] !="" and $_POST ["valor2"]!="") {
    if ($_POST["operador"] == "suma"){
        print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
        print ('<br /><a href="calculadora.html">Volver</a>');
    } elseif ($_POST["operador"] == "resta"){
        print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
        print ('<br /><a href="calculadora.html">Volver</a>');
    } elseif ($_POST["operador"] == "multiplicacion"){
        print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
        print ('<br /><a href="calculadora.html">Volver</a>');
    } elseif ($_POST["operador"] == "division"){
        print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
        print ('<br /><a href="calculadora.html">Volver</a>');
    }
} else {
    print("Ingresa algun valor");
    print ('<br /><a href="calculadora.html">Volver</a>');
}
?>