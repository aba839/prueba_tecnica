<?php
//ARRAYS
//1
$arrayVacio=[];
//2
$arrayNumeros=[0,1,2,3,4,5,6,7,8,9];
//3
$arrayNumerosPares=[0,2,4,6,8];
//4
$arrayBidimensional=[[0, 1, 2],['a','b','c']];
//5
$arrayNumerosNeg=[0,-1,-2,-3,-4,-5,-6,-7,-8,-9];
//6
$yo=[
    "nombre" => "Alejandro",
    "apellido" => "Bermúdez",
    "edad" => 19,
];
//7
$loGuardoTodo=['Hola','que',23,42.33,'tal'];
//8
$arrayDeArrays=[[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];
//FUNCIONES
//9
function suma($num1,$num2){
    $suma=$num1+$num2;
    return $suma;
}
//10
function potenciacion($num1,$num2){
    $potencia=$num1**$num2;
    return $potencia;
}
//11
function separarPalabras($string){
    $arraypalabras=explode(" ",$string);
    return $arraypalabras;
}
//12
function repetirString($texto,$veces){
    $result="";
    for($i=0;$i<$veces;$i++){
        $result.=$texto;
    }
    return $result;
}
//13
function esPrimo($numero){
    for($i=2;$i<=sqrt($numero);$i++){
        if($numero%$i==0){
            return false;
        }
    }
    return true;
}
//14
function multiplicacion($num1,$num2){
    $multi=$num1*$num2;
    return $multi;
}
//15
function division($num1,$num2){
    $divi=$num1/$num2;
    return $divi;
}
//16
function esPar($num1){
    if($num1%2==0){
        return true;
    } else{
        return false;
    }
}
//17
function resta($num1,$num2){
    $resta=$num1-$num2;
    return $resta;
}
$arrayFunciones = array(
    "suma" => "suma",
    "resta" => "resta",
    "multiplicacion" => "multiplicacion"
  );
//MEZCLANDO ARRAYS Y FUNCIONES
//18
function ordenarArray($array) {
    sort($array);
    return $array;
  }
//19
//20
//21
//22
//23
//24
//25
//26

?>