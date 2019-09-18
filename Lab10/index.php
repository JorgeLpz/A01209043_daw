
<?php

  // calcula el promedio en base a los datos obtenidos por metodo post
  function calcular_promedio($numeros) {

    $resultado = 0;
    
    for ($i=0; $i <count($numeros) ; $i++) {
      $resultado += $numeros[$i];
    }

    $resultado = $resultado/5;

    return $resultado;
  }

// Calcula mediana de los numeros dentro del metodo post
  function calcular_mediana($numeros){
    //ordenamos los datos para pode robtenr mediana
    $resultado = sort($numeros);
    return $resultado[2];

  }

//Calcula el orden ascendente dendtro del emtodo post
  function calcular_acendente($numeros){
    //ciclo que imprime los numeros en el arreglo
    sort($numeros);
    for ($i=0; $i <count($numeros) ; $i++) {
      echo $numeros[$i] . " ";
    }
  }


//calcular_desendente dentro del arreglo con metodo post
  function calcular_desendente($numeros){
    //ciclo que imprime los numeros en el arreglo
    sort($numeros);
    for ($i=count($numeros) - 1; $i >= 0 ; $i--) {
      echo $numeros[$i] . " ";
    }
    echo "</h5><br> </div>";
  }



// controlador de Resulatados de ejercicios
  function imprimeResultado(){
    
    $numeros = array($_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"], $_POST["n5"]);
    
    // imprimir promedio
    $promedio = calcular_promedio($numeros);
    echo "<br><br><div class ='container'><h5>El promedio es: $promedio</h5><br>";

    // imprimir mediana
    $mediana = calcular_mediana($numeros);
    echo "<h5>La mediana es: $mediana </h5><br>";

    //imprimir Numero ascendente
    echo "<h5>Los numeros en orden ascendente son:";
    calcular_acendente($numeros);
    
    //imprimir en orden descendente
    echo "<br>" . "<br><h5>Los numeros en orden descendente son: ";
    calcular_desendente($numeros);
  }
    


function imprimeTabla(){
  
  echo "<table border='2' class='highlight centered responsive-table' cellspacing='0'>
    <tr><th>Numero</th><th>Cuadrado</th><th>Cubo</th></tr>";
  
  $n6 = $_POST["n6"];

  for ($i=0; $i <= $n6; $i++) {
    $cubo = $i*$i*$i;
    $cuadrado = $i*$i;
    echo"<tr><td>$i</td><td>$cuadrado</td><td>$cubo</td><tr>";
  }

  echo "</table> <br> <br> <br>";
}

  include_once("_Header.html");
  include_once("_Navigation.html");
  include_once("_Body.html");

  imprimeResultado();
  imprimeTabla();
  
  include_once("_Preguntas.html");
  include_once("_Footer.html");

?> 
