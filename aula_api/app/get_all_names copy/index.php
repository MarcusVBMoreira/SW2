<?php 
    //aqui vae ser nossa aplicação

    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';

    $data = require_once __DIR__ . '../../../api/data.php';

    echo Response::resposta(200, 'sucess' , ['total_registros' => count($data)]);

?>