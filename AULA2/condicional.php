<?php

$salario = 800.70;
$tempo_servico = 25;
$folga_fim_semana = false; // variavel boleana

if (($tempo_servico >= 20) and ($salario > 1000.88) and ($folga_fim_semana != true))
    {print_r("dados errados do funcionario: ");}
    else if (($tempo_servico == 25) and ($salario == 800.70) and ($folga_fim_semana != true))
        {print_r("dados corretos do funcionario: ");
        print nl2br("\n tempo de serviço: ".$tempo_servico."\n salário R$ = ".$salario."\n folga sábado e domingo: não".$folga_fim_semana);}
?>