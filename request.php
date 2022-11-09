<?php 

    $id = $_GET['id'];
    $date = $_GET['date'];
    $name = $_GET['name'];

    $db = new mysqli ('localhost','root','root','test_task_s');
    if($db->connect_errno){
        echo('Ошибка подключния к Базе Данных');
        die();
    }
    $db->query("SET NAME 'utf8'");	

    if ($id){
        $x = "WHERE `external_code` = '$id'";
    }  
    elseif ($date) {
        $x = "WHERE `date_changes` = '$date'";
    }
    elseif ($name) {
        $x="WHERE `title` = '$name'";
    }

    $query = "SELECT * FROM `t1` $x";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));;
	$row = mysqli_fetch_assoc($result);

    while ($row){
        $data[] = $row;
        echo "<pre>id: " . htmlspecialchars($row['external_code']) . "   Номер: " . htmlspecialchars($row['numbere']) . "   Статус" . htmlspecialchars($row['statuse']) . "   Название: " . htmlspecialchars($row['title']) . "   Дата изменений: " . htmlspecialchars($row['date_changes']) . "</pre></br>"; 
        echo('</br>');
        $row = mysqli_fetch_assoc($result); 
    }
    if (!$data){
        echo('По запросу ничего не найдено');
    }
?>