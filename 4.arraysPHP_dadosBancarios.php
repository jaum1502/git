<?php

$dinheiroEmConta = 0;
echo "\033[2J\033[;H";
do {
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n\n";

    echo "Escolha uma opção: ";
    $menu = (int) fgets(STDIN) . "\n";
    switch ($menu) {
        case 1:
            echo "\033[2J\033[;H";

            echo "Dinheiro em conta: R$$dinheiroEmConta\n\n\n";
            break;
        case 2:
            echo "\033[2J\033[;H";
            echo "Digite o valor a ser sacado: R$";
            $valorSacado = (float) fgets(STDIN);
            if($valorSacado<$dinheiroEmConta){
                $dinheiroEmConta += $valorSacado;
            echo "\033[2J\033[;H";
            }else{
                echo "\033[2J\033[;H";
                echo "Saldo insuficiente\n\n";
                echo 'Saldo Atual: R$'.$dinheiroEmConta . "\n\n\n";
            }
            break;
        case 3:
            echo "\033[2J\033[;H";
            echo "Digite o valor a ser depositado: R$";
            $dinheiroEmConta += (float) fgets(STDIN);
            echo "\033[2J\033[;H";
            break;
        case 4:
            echo "\033[2J\033[;H";
            echo "------------------------------------\n";
            echo "FIM DO PROGRAMA";
             echo "-----------------------------------\n";
            break;
        default:
        echo "\033[2J\033[;H";
            echo "VALOR INVÁLIDO\n";

    }
} while ($menu != 4);
