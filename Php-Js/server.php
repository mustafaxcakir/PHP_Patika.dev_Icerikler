<?php

$db = new PDO('mysql:host=localhost;testdb=php_js;charset=utf8', 'root', '');

$islem = $_GET['islem'] ?? null;

if($islem == 'group') {
    $name = $_POST['groupname'];
    $q = $db->query("INSERT INTO `group` SET group_name = '$name'");

    if($q) {
        $status = 'success';
        $title = 'İslem başarılı';
        $msg= 'islem basarıyla tamamlandı.';
        echo json_encode(array('status' => $status, 'title' => $title, 'msg' => $msg, 'data' => [
            'id' => $db->lastInsertId(),
            'name' => $name
        ]));
        exit();
    }else {
        $status = 'error';
        $title = 'ops dikkat';
        $msg= 'beklenmedik bir hata meydana geldi.';
        echo json_encode(array('status' => $status, 'title' => $title, 'msg' => $msg));
        exit();
    }
}

