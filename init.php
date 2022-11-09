<!DOCTYPE html>
<html>
	<head>
		<title>ввод</title>
		<script
			src="https://code.jquery.com/jquery-3.6.0.js"
			integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			crossorigin="anonymous">
		</script>
	</head>
	
	<body>
        <form action="action.php" method="post" enctype="multipart/form-data">
			ДОБАВЛЕНИЕ<br /><br />
            Внешний код: <input type="text" name="id" required /><br /><br />
            Номер: <input type="text" name="num" required /><br /><br />
            Статус: <input type="text" name="setatuse" required /><br /><br />
            Название: <input type="text" name="name" required /><br /><br />
            <input type="submit" value="Создать запись!" /><br /><br /><br /><br />
        </form>
		<form action="request.php" method="get" enctype="multipart/form-data">
			ВЫВОД (Выбрать 1 из критериев)<br /><br />
            Внешний код: <input type="text" name="id" /><br /><br />
            Дата изменений: <input type="date" name="date" /><br /><br />
            Название: <input type="text" name="name" /><br /><br />
            <input type="submit" value="Найти записи" />
        </form>
    </body>
</html>