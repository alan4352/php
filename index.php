<?php /*
$_pedro = true ;
echo $_pedro;
var_dump($_pedro);
$peso_pedro = 5.5 ;
echo $peso_pedro;
var_dump($peso_pedro);

const resolucion = "1524/24 ";
echo resolucion;

datine("ANIMALES", array(
    "perro",
    "pato",
    "gato"
));
echo ANIMALES[1];

ARRAY(
$estudiantes = ["Carlos", "Luis", "Marcelo "]);
echo $estudiantes[2];
$estudiantes[2] = "Pedro ";
echo $estudiantes[2];

$variable = 10;
echo ++$variable;

$variable = 10;
echo $variable++;
echo $variable;



$total = (9 > 7)? 9*10 : 9*5;
echo $total;
*/
/*
$edad = 18;

if($edad >= 18){
    echo "Es mayor de edad";
}
else{
    echo "Es menor de edad";
}
*/

//$gasto = 140;
//if($gasto > 100){
//    $tot = $gasto * (20/100);
//    $total = $gasto - $tot;
//
//}else{
//    echo "Debe pagar $gasto";
//}

//goma = 800 c/u si compra - de 5 gomas
// goma = 700 5 o mas
/*
$goma = 9;
if ($goma <= 5){
    echo "Debe pagar $".$goma * 800;
}else{
    echo "Debe pagar $".$goma * 700;
}
*/
/*
$nota1 = 7.5;
$nota2 = 7.8;
$nota3 = 6.0;
$prom = ($nota1 + $nota2 + $nota3)/3;
if ($prom >= 7.0){
    echo "Aprobaste con $prom \n";
}else {
    echo "Desaprobaste con $prom \n";
}

$a = 5;
$b = 6;

if($a>$b){
    echo"A es mayor que B";
}else if($a<$b){
    echo "A es menor que B";
}else {
    echo "A y B son iguales";
}
$a = -1;
if($a > 0){
    echo "A es positivo";
}else if ($a == 0){
    echo"A es igual a 0";
}else{
    echo "A es negativo";
}
$a = 0;
if($a % 2 == 0){
    echo "A es par";
}
else{
    echo "A es impar";
}*/ /*
$a = 51;
if($a >= 1 && $a <= 100){
    if($a % 2 == 0){
        echo "A es par";
    }
    else {
        echo" A es impar";
    }
}

$camisa = 7;

if ($camisa > 2){
    $resu = 2500 - (2500* 20/100);
    echo "Debe pagar $" . $camisa * $resu;
}else{
    $resu = 2500 - (2500* 10/100);
    echo "Debe pagar $" . $camisa * $resu;
}
$camisa > 2 ? $resu = 2500 - (2500* 20/100) : $resu = 2500 - (2500* 10/100);
echo "Debe pagar $" . $camisa * $resu;
*/
/*
$edad = 54 ;
$genero = "F";
if($genero == "M"){
    if($edad > 60){
        echo "Se puede jubilar";
    }else{
        echo "No se puede jubilar";
    }
}else if($genero == "F"){
    if($edad >= 54){
        echo "Se puede jubilar";
    }else {
        echo "No se puede jubilar";
    }
}else {
    echo "Solo genero Masculino (M) o Femenino (F)";
}*//*
$a = 7;
switch($a){
    case 1: echo "Lunes ";
    break;
    case 2: echo "Martes ";
    break;
    case 3: echo "Miercoles ";
    break;
    case 4: echo "Jueves ";
    break;
    case 5: echo "Viernes ";
    break;
    case 6: echo "Sabado ";
    break;
    case 7: echo "Domingo ";
    break;
    default: echo"Ingrese un numero entre 1 y 7";//siempre realiza
}*//*
$num1 = readline( "hola ingrese el primer numero" );
$val = readline('hola ingrese la operacion deseada,"+", "-", "*", "/"');
$num2 = readline( "hola ingrese el segundo numero ");
switch($val){
    case "+": echo $num1 + $num2;
    break;
    case "-": echo $num1 - $num2;
    break;
    case "*": echo $num1 * $num2;
    break;
    case "/": if($num2 != 0){echo $num1 / $num2;}else {echo 'No se puede dividir por 0';}
    break;
    default : echo "Ese operador no esta disponible";
}

$gen = readline("Ingrese su genero");
if($gen == "F"){
    echo "Su genero es femenino";
}else if($gen == "X"){
    echo "Su genero es no binario";
}else{
    echo "Su genero es masculino";
}
    */
    /*
$wa = readline("ingrese un nombre (q para terminar el estandar)");
$waaaa = 0;
    while($wa != "q"){
        
    echo "usted ingreso el nombre $wa \n";
    $wa = readline("ingrese un nombre (q para terminar el estandar)");
$waaaa = $waaaa + 1;
    }
    echo "usted ingreso $waaaa";*/
    /*








    $num = readline("Ingrese un numero para iniciar");
    $num2 = 0;
    $num 3 = 0;
    while($num > 0){
        $num = readline("Ingrese un numero");
        $num2 = $num2 + $num;
        $num3 = $num3 + 1;
    }
    echo $num2;
    */
    /*$num = 10;
    $num2 = readline("Ingrese un numero");
    while($num2 != $num){
    if($num2 < $num ){
        echo "El numero es mas grande vuelve a intentar \n";
        }else{
        echo "El numero es mas chico intentalo otra vez \n";
        }
        $num2 = readline("Ingrese otro numero");
    }
    echo "Ganaste";
    */

    /*
    $num1 = 1;
    while($num1 <= 10 ){
    echo $num1 . "\n";
    $num1 = $num1 +1;
    }*/

    /*Crea un menú simple que permita al usuario elegir entre varias opciones (por
    ejemplo, 1. Saludar, 2. Sumar dos números, 3. Salir). Usa while para repetir el
    menú hasta que el usuario elija salir.*/
    
    
    /*$num1 = readline("Ingree un numero, presione 3 para salir");
    while($num1 != 3){
        if($num1 == 1){
            echo "Hola \n";
        }else if($num1 == 2){
            $num2 = readline("ingrese el primer numero");
            $num3 = readline("Ingrese el segundo numero");
            $resu = $num2 + $num3;
            echo $resu . "\n";
        }
        $num1 = readline("Ingrese otro numero \n");
    }
    echo "Adios"*/
    
    /* $num1 = 0;
    $num2 = 0;
    while ($num1 <= 100){
        if($num1 % 2 == 0){
            $num2 = $num2 + $num1;
            
        }
        $num1 = $num1 + 1;
    }
    echo "La suma entre todos los numeros pares entre 1 y 100 es igual a: ".  $num2;*/

    /*$num1 = readline("Ingrese un numero para la cuenta regresiva");
    while($num1 >= 0){
        echo $num1 . "\n";
        $num1 = $num1 - 1;
    }*/
    /*$num1 = 12345;
    $num2 = readline("Ingrese la contraseña numerica");
    $num3 = 1;
    while($num3 <= 3){
        $num2 = readline ("Ingrese la contraseña \n");
        if($num2 != $num1){
            echo "Contraseña incorrecta intente nuevamente. Intentos restantes: " . 3 - $num3 . "\n";
        }else{
            echo "Contraseña correcta \n";
            $num3 = 4;
        }
        $num3 = $num3 + 1;
        
    }*/
    $num = readline("Ingrese un numero");
    $num1 = 1;
    while($num > 0){
        $num1 = $num1 *$num;
        $num = $num - 1;
        
    }
    echo "El factorial del numero es: " . $num1;
?>