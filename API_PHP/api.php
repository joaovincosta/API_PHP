<?php
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];
    // echo "Método da requisição: " . $metodo;

    $arquivo = 'usuarios.json';

    if(!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([],JSON_PRETTY_PRINT | JSON_UNESCAPE_UNICODE));
    }

    $usuarios = json_decode(file_get_contents($arquivo), true);

    // $usuarios = [
    //     ["id" => 1, "nome" => "Katniss Everdeen", "email" => "kapeeta@gmail.com"],
    //     ["id" => 2, "nome" => "Peeta Melark", "email" => "everlark@gmail.com"],
    // ];

    switch ($metodo) {
        case 'GET':
            // echo "AQUI AS AÇÕES DO MÉTODO GET";
            echo json_encode($usuarios);
            break;
        case 'POST';
            // echo "AQUI AS AÇÕES DO MÉTODO POST";
            $dados = json_decode(file_get_contents('php://input'), true);
            // print_r($dados);
            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            array_push($usuarios, $novoUsuario);
            echo json_encode('Usuário inserido com sucesso');
            print_r($usuarios);

            break;
        default:
            echo "MÉTODO NÃO ENCONTRADO";
            break;
    }

    // echo json_encode($usuarios);
?>