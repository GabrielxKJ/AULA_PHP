<?php


function somatoria($a) {
    // variável do tipo static mantém o valor
    // que lhes foi atribuido na última execução
    static $b;
    $b += $a;

    echo "valor de a = $a valor de b = $b <br> \n";
}

somatoria(2);
somatoria(4);
somatoria(6);

?>