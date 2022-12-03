<?php



if(isset($_POST['mais'])){
     
    $valor1=(int) file_get_contents('calculos.txt');
    $valor2 = $_POST['numero'];
    
    echo $resultado = $valor1 + $valor2;
    file_put_contents('calculos.txt', $resultado);
    
}


if(isset($_POST['menos'])){

    $valor1=(int) file_get_contents('calculos.txt');
    $valor2 = $_POST['numero'];
    
    echo $resultado = $valor1 - $valor2;
    file_put_contents('calculos.txt', $resultado);
    $var = $resultado;
}

if(isset($_POST['dividir'])){

    $valor1=(int) file_get_contents('calculos.txt');
    $valor2 = $_POST['numero'];
    
    echo $resultado = $valor1 / $valor2;
    file_put_contents('calculos.txt', $resultado);
    
}

if(isset($_POST['multiplicar'])){

    $valor1=(int) file_get_contents('calculos.txt');
    $valor2 = $_POST['numero'];
    
    echo $resultado = $valor1 * $valor2;
    file_put_contents('calculos.txt', $resultado);
     
   
}




?>


<form action="calculadora.php" method="post">

<input type="number" name="numero" placeholder="digite um numero">
<input type="submit" name="mais" value="+" >
<button name="menos">-</button>
<button name=" dividir">/</button>
<button name=" multiplicar">x</button>
</form>
