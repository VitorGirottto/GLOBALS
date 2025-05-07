<?php

class pilha {

    function adicionarItem($item) {
        if (!isset($GLOBALS['pilha'])) {
            $GLOBALS['pilha'] = [];
        }
        array_push($GLOBALS['pilha'], $item);
        echo "Item '$item' adicionado à pilha.\n";
    }

    function excluirItem() {
        if (isset($GLOBALS['pilha']) && !empty($GLOBALS['pilha'])) {
            $item = array_pop($GLOBALS['pilha']);
            echo "Item '$item' removido da pilha.\n";
        } else {
            echo "A pilha está vazia. Nada para remover.\n";
        }
    }

    function imprimirPilha() {
        if (isset($GLOBALS['pilha']) && !empty($GLOBALS['pilha'])) {
            echo "Itens na pilha (do topo para base):\n";
            foreach (array_reverse($GLOBALS['pilha']) as $item) {
                echo "- $item\n";
            }
        } else {
            echo "A pilha está vazia.\n";
        }
    }

    function verTopo() {
        if (!empty($GLOBALS['pilha'])) {
            $topo = end($GLOBALS['pilha']);
            echo "Topo da pilha: $topo\n";
        } else {
            echo "A pilha está vazia.\n";
        }
    }

    function tamanho() {
        $tamanho = isset($GLOBALS['pilha']) ? count($GLOBALS['pilha']) : 0;
        echo "A pilha tem $tamanho item(s).\n";
    }

    function esvaziar() {
        $GLOBALS['pilha'] = [];
        echo "Pilha esvaziada com sucesso.\n";
    }

    function contem($item) {
        if (in_array($item, $GLOBALS['pilha'])) {
            echo "O item '$item' está na pilha.\n";
        } else {
            echo "O item '$item' NÃO está na pilha.\n";
        }
    }
}

$obj = new pilha();

while (true) {
    echo "\n--- MENU ---\n";
    echo "1. Adicionar item à pilha\n";
    echo "2. Remover item da pilha\n";
    echo "3. Imprimir pilha\n";
    echo "4. Ver topo da pilha\n";
    echo "5. Ver tamanho da pilha\n";
    echo "6. Esvaziar pilha\n";
    echo "7. Verificar se item está na pilha\n";
    echo "8. Sair\n";
    echo "Escolha uma opção: ";

    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            echo "Digite o item a ser adicionado: ";
            $item = trim(fgets(STDIN));
            $obj->adicionarItem($item);
            break;
        case 2:
            $obj->excluirItem();
            break;
        case 3:
            $obj->imprimirPilha();
            break;
        case 4:
            $obj->verTopo();
            break;
        case 5:
            $obj->tamanho();
            break;
        case 6:
            $obj->esvaziar();
            break;
        case 7:
            echo "Digite o item que deseja procurar: ";
            $item = trim(fgets(STDIN));
            $obj->contem($item);
            break;
        case 8:
            echo "Encerrando o programa.\n";
            exit();
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}
