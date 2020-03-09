<?php


$num = $_GET['txtNum'];

if($num>=1){
    echo("Os múltiplos de ".$num." são:");
    for($i=1;$i<=$num;$i++){
        $resultado=$num%$i;

        if($resultado==0){
            echo("<br> --> ".$i);
        }
    }
    
}

else{
    echo("Digite um número inteiro, que seja positivo e maior que 0!");
}
?>