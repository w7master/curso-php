<?php
$masculino = true;
if (masculino){
    echo"masculino";
}else {
    
}

if (!masculino){ //inverte a condição
    echo"masculino";
}
     
if (1 == "1"){ // == compara valores === compara se são diferente e do mesmo tipo
    echo"São iguais";
}else {
    echo"São iguais";
}    


$ehpar = ( 10 % 2 == 0)? "sim" : "não"; // resto de divisão

echo $ehpar


$nota1 = 10;
$nota2 = 7;
$nota3 = 3;  

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 6 ) {
    echo "passou"

}elseif ($media >= 4){
    echo "recuperação"
}else{
    echo "reprovador"
}


// calculadora
<?php

$valor1 = 10;
$valor2 = 5;
$operacao = "*";

if ($operacao == "+" ){
    $resultado =  ($valor1 + $valor2);
    echo $resultado;
}else {
    if ($operacao == "-"){
        $resultado1 =  ($valor1 - $valor2);
        echo $resultado1;
    }else {
        if ($operacao == "*"){
            $resultado2 =  ($valor1 * $valor2);
            echo $resultado2;
        }else {
            if ($operacao == "/"){
                $resultado3 =  ($valor1 / $valor2);
                echo $resultado3;
            }else {
        
            }    

        }
    }
}

//calculadora com switch

<?php

$valor1 = 10;
$valor2 = 5;
$operacao = "/";

switch ($operacao){
    case '+';
    $resultado =  ($valor1 + $valor2);
    echo $resultado;
    break;
   
    case '-';
    $resultado =  ($valor1 - $valor2);
    echo $resultado;
    break;

    case "*";
    $resultado =  ($valor1 * $valor2);
    echo $resultado;
    break;

    case '/';
    $resultado =  ($valor1 / $valor2);
    echo $resultado;
    break;

    default:
    echo 'operacao invalida'
}

$num = 0;
$valor1 = 1;

/// trabalhando com loop
while ($num <= 10){
    // para concatenar primeiro coloca o texto que vai exibir
    //depois as variaves que vai calcular
    // echo "$valor1 * $num =".  foi 1 * 1 =
    // . ($valor1 * $num)."<br>" aqui foi o resultado 1 * 1 = 0
    // ponto que é concatenar
echo "$valor1 * $num =". ($valor1 * $num)."<br>" ;
$num++;

}


// trabalhando com for

for ($par= 0, $impar = 1; $par <= 100; $par += 2, $impar += 2){
    echo "$Par: $par e Impar $impar /br>";
}
