<?php

//EJEMPLO 1
/*$numero = 5;
$nombre = 'Sara';
$altura = 1.58*/

//EJEMPLO 2 
/*$edad;
$edad = 20;
echo $edad;*/

//EJEMPLO 3
/*echo $x= 9;
echo $x= 2;
echo $x= 3;*/ #imprime el numero completo

//EJEMPLO 4
/*$va = 456;
echo $va;*/

//EJEMPLO 5
/*echo $nombre = 'yura';
echo $nombre = 'jeimmy';*/

//EJEMPLO 6
/*$this = 'hola';
echo $this;*/ //esto genera error 

//EJEMPLO 7
/*$nombre = 'jei';
$nombre = 'yura';

echo $nombre; */

//EJEMPLO 8
/*$a = 'Analisis';
$b = 4;
 echo $b;*/

//EJEMPLO 9 funcion global
/*$x=5;
function prueba(){
    echo "variable global: " .$x;
}
prueba();*/ #ESTE CAMPO DE ERROR

//EJEMPLO 10
/*function prueba(){

    $x=5;
    echo "La variable es: $x"; 
}
prueba();*/

//EJEMPLO 11 VARIABLE LOCAL
/*$edad=21;
function prueba(){
    global $edad;
}*/

//EJEMPLO 12 - GLOBALS 
/*$altura = 160;
function prueba(){
    $GLOBALS["altura"] = 154;
}

prueba();
echo $altura;*/

// EJEMPLO 13 - VARIABLES STATIC
/*function prueba (){
    static $x =0;
    echo $x++;
    $x;

}

prueba();
prueba();
prueba();
prueba();
prueba();
*/

//EJEMPLO 14 - variables constantes > const funciona para realizar una declaración y deben siempre ir en mayuscula

/*const ESTUDIANTES = "Yurani Guteirrez";
echo ESTUDIANTES; */

define ("PROFESOR", "Carolina Mendez");
echo PROFESOR;


?>