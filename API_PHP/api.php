<?php
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    // echo "Método da requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            echo "AQUI AS AÇÕES DO MÉTODO GET";
            break;
        case 'POST';
            echo "AQUI AS AÇÕES DO MÉTODO POST";
            break;
        default:
            echo "MÉTODO NÃO ENCONTRADO";
            break;
    }

    // $usuarios = [
    //     ["id" => 1, "nome" => "Fulano", "email" => "fulano@gmail.com"],
    //     ["id" => 2, "nome" => "Ciclano", "email" => "ciclano@gmail.com"]
    // ];

    // echo json_encode($usuarios);
?>