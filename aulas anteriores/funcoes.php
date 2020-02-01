<?php

function calcula(int $a, int $b, int $c, int $delta){
   $delta = ($b * $b) - ((4 * $a) * $c);
   $x1 = (-$b + $delta) / 2 * $a;
   $x2 = (-$b + $delta) / 2 * $a;
   
  echo

}


<?php

//require_once('funcoes.php');

$alunos = [
    [
        'nome' => 'João',
        'notas' => [10, 8, 5]
    ],
    [
        'nome' => 'Maria',
        'notas' => [6, 5, 3]
    ],
    [
        'nome' => 'José',
        'notas' => [9, 7, 4]
    ]
];


function calculanotas(array &alunos)
{
    foreach($alunos as $aluno){
        $notas =$aluno ['notas'];
        $media = ($notas [0]+ $notas [1] + $notas [2] / 3);
        $aluno ['media'] =$media;

    }

}

function Exibenotas(array &alunos){

    foreach($alunos as $aluno){
        print ("O Alunoe {$aluno ['nome']} teve media {$aluno ['media']} .<br>")
    }
}