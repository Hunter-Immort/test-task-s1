<?php 

    $id = $_POST['id'];
    $num = $_POST['num'];
    $setatuse = $_POST['setatuse'];
    $name = $_POST['name'];

    $db = new mysqli ('localhost','root','root','test_task_s');
    if($db->connect_errno){
        echo('Ошибка подключния к Базе Данных');
        die();
    }
    $db->query("SET NAME 'utf8'");	

    $query = "INSERT INTO `t1` (EXTERNAL_CODE,NUMBERE,STATUSE,TITLE) VALUES ('$id', '$num', '$setatuse', '$name')";
    mysqli_query($db, $query) or die(mysqli_error($db));
?>