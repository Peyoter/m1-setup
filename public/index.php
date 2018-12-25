<?php

include_once __DIR__ . '/../Router.php';
include_once __DIR__ . '/../model/Disc.php';
include_once __DIR__ . '/../validation/DiskValidation.php';


Router::route('/disc', function() {
    $discs = new Disc();
    $discs = $discs->get();
    return include __DIR__. "/../view/list.php";
});

Router::route('/disc/create', function(){
    return include __DIR__. "/../view/form.php";
});

Router::route('/disc/store', function() {
    $disc = new Disc();

    //@TODO Загрузка файла

    //@TODO Не дописана валидация
    $data = DiskValidation::isValid($_POST);

    if($data->errors){
        $data = $_POST;
        $errors = $data->errors;
        return include __DIR__. "/../view/form.php";
    }

    $data['storage_code'] = $data['room_number'] .':'. $data['rack_number'] .':'. $data['shelf_number'];
    $disc->insert($data);

    $redirectTo = $_SERVER['HTTP_HOST'] . '/disc';
    header('Location: http://'.$redirectTo.'/');
});

Router::route('/disc/edit/(\d+)', function($id) {
    $disc = new Disc();
    $data = $disc->getById($id);
    return include __DIR__. "/../view/form.php";
});

Router::route('/disc/update', function() {

    //@TODO Не дописано
    $redirectTo = $_SERVER['HTTP_HOST'] . '/disc';
    header('Location: http://'.$redirectTo.'/');
});


Router::route('/disc/delete/(\d+)', function($id) {
    $discs = new Disc();
    $discs->deleteById($id);

    $redirectTo = $_SERVER['HTTP_HOST'] . '/disc';
    header('Location: http://'.$redirectTo.'/');
});


Router::route('/disc?.+', function() {
    $discs = new Disc();

    $sql = 'select * from albums';

    if (!empty($_GET['name']))
    {
        $whereQuery[] = 'name LIKE :name';
        $conditions['name'] = '%'.$_GET['name']."%";
    }

    if ($whereQuery)
    {
        $sql .= ' WHERE '.implode(' AND ', $whereQuery);
    }


    if (!empty($_GET['orderBy']))
    {
        $orderBy = $_GET['orderBy'];
        $orderType = ($_GET['orderType'] == 'ASC') ?'ASC':'DESC';
        $sql .= ' ORDER BY '.$orderBy.' ' . $orderType;
    }

    $discs = $discs->select($sql, $conditions);

    return include __DIR__. "/../view/list.php";
});

Router::exec($_SERVER['REQUEST_URI']);