<?php
    if($_POST ["frase"] !=""){
        $frase = $_POST ["frase"];
         $vocales= substr_count($frase,'a') +substr_count($frase,'A')
         +substr_count($frase,'e') +substr_count($frase,'E')
         +substr_count($frase,'i') +substr_count($frase,'I')
         +substr_count($frase,'o') +substr_count($frase,'O')
         +substr_count($frase,'u') +substr_count($frase,'U');
         $a = substr_count($frase,'a') + substr_count($frase,'A');
         $e = substr_count($frase,'e') + substr_count($frase,'E');
         $i = substr_count($frase,'i') + substr_count($frase,'I');
         $o = substr_count($frase,'o') + substr_count($frase,'O');
         $u = substr_count($frase,'u') + substr_count($frase,'U');
        echo "<b><br />El numero total de vocales es</b>: $vocales";
        echo "<b><br />El numero total de letras (a) es:</b> $a";
        echo "<b><br />El numero total de letras (e) es:</b> $e";
        echo "<b><br />El numero total de letras (i) es:</b> $i";
        echo "<b><br />El numero total de letras (o) es:</b> $o";
        echo "<b><br />El numero total de letras (u) es:</b> $u";
        print ('<br /><a href="conle.html">Volver</a>');
    } else {
        print("Ingresa alguna frase o palabra");
        print ('<br /><a href="conle.html">Volver</a>');
    }
?>