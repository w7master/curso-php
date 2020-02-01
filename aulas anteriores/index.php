<?php

require_once './db-post.php';


// $consulta = "SELECT * FROM usuario";

// if($result = pg_query($conexao, $consulta)){
//     while ($linha = pg_fetch_assoc($result)){
// foreach ($linha as $campo => $dado){ // lê linhas
//         echo "$campo : $dado <br>";

//         }
//     }

// }

// pg_free_result($conexao);

///INSERT
// $nome = "fernando";
// $email = "contato@gmail.com";
// $senha = "123";

// $inserir = "insert into usuario (nome, senha, email) values ('$nome', '$senha', '$email')";

// if($resultado = pg_query($conexao, $inserir)){
//     print("linhas afetadas: " . pg_affected_rows($resultado));
      
//     }else{
//         print("erro" . pg_result_error($resultado));
//     }
    
///SELECT
// $parametro = '%gmail%';
// $consulta = "select * from usuario where email like $1";
// if (pg_prepare($conexao, '', $consulta)){

//     if ($resultado = pg_execute($conexao, '', [$parametro])){
//         while ($linha = pg_fetch_assoc($resultado)){
//             foreach($linha as $campo => $dado){
//                 echo "$campo => $dado <br>";
//             }
//             echo '<hr>';
//         }

//     }
//     pg_free_result($result);
// }

$email = "maria@gmail.com";
$id = 1;
$atualiza = "UPDATE usuario set email = $1 where id = $2";

IF (pg_prepare($conexao, 'att_user', $atualiza)){
    if ($resultado = pg_execute($conexao, 'att_user', [$email, $id])){
        $linhas = pg_affected_rows ($resultado);
            if ($linhas > 0){
                print("atualizado $linhas foram atualizada");
            }else{
                print "erro ao preparar:" . pg_last_error($conexao);
            }
    }
}




pg_close($conexao);



