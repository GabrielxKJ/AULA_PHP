<?php

/* Arrays Indexados: 
São arrays em que cada elemento é associado a um índice numérico,
começando em 0. Você pode acessar os elementos do array usando 
esses índices numéricos. Por exemplo:
*/ 

$frutas = array("Maçã", "Banana", "Laranja");
echo $frutas[0];


/*
Arrays Associativos:
São arrays em que cada elemento é associado a uma chave específica em vez 
de um índice numérico. As chaves podem ser strings ou números. 
Você pode acessar os elementos do array usando essas chaves. Por exemplo:
*/

$pessoa = array(
    "nome" => "joão",
    "idade" => 30,
    "cidade" => "São Paulo"
);

echo $pessoa["idade"];

// Usando a função array()
$frutas = array("Maçã", "Banana", "Laranja");

// Usando a sintaxe de colchetes []
$numeros = [1, 2, 3, 4, 5];

/*
Os arrays em PHP também são dinâmicos, o que significa que você pode adicionar
ou remover elementos do array a qualquer momento usando funções como:

array_push(),
array_pop(),
array_shift(),
array_unshift(),
unset(), entre outras.
*/

array_push($frutas, "manga"); // adiciona manga ao final do array.
unset($frutas[0]); // remove o elemento na posição 0.

echo $frutas;




/* 
Os arrays multidimensionais em PHP podem ter quantas dimensões forem 
necessárias, ou seja, você pode ter arrays dentro de arrays dentro de 
arrays e assim por diante, para representar estruturas de dados mais 
complexas.
*/

$alunos = array(
    array("nome" => "João", "idade" => 20, "cidade" => "São Paulo"),
    array("nome" => "Maria", "idade" => 25, "cidade" => "Rio de Janeiro"),
    array("nome" => "Pedro", "idade" => 22, "cidade" => "Belo Horizonte")
);

// Acessando elementos do array multidimensional
echo $alunos[0]["nome"]; // Saída: João
echo $alunos[1]["idade"]; // Saída: 25
echo $alunos[2]["cidade"]; // Saída: Belo Horizonte


/* sort(): O método sort() é usado para ordenar um array em ordem crescente. Ele modifica o array original.
Aqui está um exemplo:
*/

$numeros = array(4, 2, 8, 1, 5);
sort($numeros);
print_r($numeros);


/* array_slice(): O método array_slice() é usado para extrair uma parte de
um array. Ele não modifica o array original, mas retorna uma nova cópia
com os elementos desejados. Aqui está um exemplo: */

$numeros = array(1, 2, 3, 4, 5);
$parte = array_slice($numeros, 2, 2);
print_r($parte); // Saída: Array ( [0] => 3 [1] => 4 )


/* sort(): O método sort() é usado para ordenar um array 
em ordem crescente. Ele modifica o array original. Aqui está um exemplo: */


$numeros = array(4, 2, 8, 1, 5);
sort($numeros);
print_r($numeros); // Saída: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 8 )

/* array_slice(): O método array_slice() é usado para extrair
uma parte de um array. Ele não modifica o array original,
mas retorna uma nova cópia com os elementos desejados.
Aqui está um exemplo: */

$numeros = array(1, 2, 3, 4, 5);
$parte = array_slice($numeros, 2, 2);
print_r($parte); // Saída: Array ( [0] => 3 [1] => 4 )

/* count(): O método count() é usado para obter o número de elementos 
em um array. Aqui está um exemplo: */


$numeros = array(1, 2, 3, 4, 5);
$quantidade = count($numeros);
echo $quantidade; // Saída: 5


?>