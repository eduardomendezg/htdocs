<?php 
#Funcionres 
function nombre($parametro1,$parametro2,$parametro3) : string {
    #cuerpo de la función
    //valor de retorno
    return "valor de retorno";
    
}
//tipos de parametros 
#1. parametros por valor 

function sumar ($num1, $num2): mixed {
    return ($num1**2) + ($num2**2);
}
$numero1 = 20;
$numero2 = 10;
$resultado =  sumar(num1:$numero1, num2: $numero2 );
echo "La sumas de los cuadrados de". $numero1 ." y ".$numero2." es ".$resultado;
//3. parametros por asignacioon directa, 
echo "<br>";
function datos( $nom,  $apelli, $edad,$carrera = "Ing en sistemas") : string {
    return"***INFO DEL ESTUDIANTE **** <br>"
          ."Nombre completo: ". $nom." ". $apelli ."<br>"
          ."Edad: ".$edad ."<br>"
          ."Carrera: ".$carrera;

}
echo datos(edad: "20", apelli: "Perez",nom: "Pablo");
#4. parametros de longitud variable
function sumarar(...$numeros) {
    return array_sum(array: $numeros);
}
echo "<br>";
echo sumarar(20,10,2,3,54,6);
echo "<br>";
echo sumarar(10,2,4);
echo "<br>";
echo sumarar(10,3);
?>