<?php 
    //aqui vae ser nossa aplicação

    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';

    $data = require_once __DIR__ . '../../../api/data.php';

    // verificar se na url veio alguma indentificação do cliente
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        echo Response::resposta(400, 'erro', 'Necesário informar o id');
        exit;
    }

    if($id < 0 || $id > count($data) - 1){
        echo Response::resposta(400, 'erro', 'Cliente não encontrado');
        exit;
    }

    echo Response::resposta(200, 'sucess', $data[$id]);

?>