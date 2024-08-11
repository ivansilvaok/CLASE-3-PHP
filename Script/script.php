<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//Serie de fibonacci

$num1= 0;
$num2= 1;

echo("PRIMEROS DIEZ NUMEROS DE LA SERIE DE FIBONACCI"."<br>");

for($i=0;$i<10;$i++){
echo($num1."<br>");
$aux=$num1;
$num1=$num2;
$num2=$aux+$num2;
}


//Funcion definida por el usuario
echo("<br>"."FUNCION DEFINIDA POR EL USUARIO"."<br>");

function sumar($numero1,$numero2){
$suma= $numero1+$numero2;
return $suma;
}

$numero1=21;
$numero2=3;
$resultado= sumar($numero1,$numero2);

echo("El resultado de la suma de ".$numero1." y ".$numero2." es: ".$resultado."<br>"."<br>");


//Funcion definida por el lenguaje
echo("FUNCION DEFINIDA POR EL LENGUAJE"."<br>");
$numero=121;

//Devuelve la raiz cuadrada de un numero
sqrt($numero);

$res= sqrt($numero);

echo("La raiz cuadrada de ".$numero." es ".$res);

?>


</body>
</html>