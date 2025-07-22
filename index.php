<?php

    require_once 'app/controllers/StudentControllers.php';
    require_once 'config/database.php';

    // if(Database::connection()){
    //     echo "✅Connected";
    // }

    $controller = new StudentControllers();
    $page = $_GET['page'] ?? 'index';

    $id = $_GET['id'] ?? null;

    switch($page){
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->update($id);
            break;
        case 'destroy':
            $controller->destroy($id);
            break;
        default:
            $controller->index();
            break;
    }

?>