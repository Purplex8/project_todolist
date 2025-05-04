<?php
//конфигурация
    require_once('./config.php');



?>

<!DOCTYPE html>
<html lang="ru">
<?php
    include(ROOT . 'templates/page_parts/head.tpl');
?>
<body class="todo-app p-5">

	<!-- Header -->
	<header class="d-flex align-items-end mb-3">
		<h1 class="m-0 me-2">Список дел</h1>
		<span class="text-secondary">3 осталось, 0 сделано</span>
	</header>

	<!-- List -->
	<ul class="list-group mb-3">
		<li class="list-group-item d-flex justify-content-center">
			<span class="todo-item-text">Список дел пуст</span>
		</li>
		<li class="list-group-item d-flex justify-content-between">
			<span class="todo-item-text">Выпить кофе</span>
			<div class="btn-group">
				<button role="button" class="btn btn-outline-dark btn-sm">Важное</button>
				<button role="button" class="btn btn-outline-danger btn-sm">Удалить</button>
			</div>
		</li>
		<li class="list-group-item d-flex justify-content-between">
			<span class="todo-item-text d-flex justify-content-between">Сделать React приложение</span>
			<div class="btn-group">
				<button role="button" class="btn btn-outline-dark btn-sm">Важное</button>
				<button role="button" class="btn btn-outline-danger btn-sm">Удалить</button>
			</div>
		</li>
		<li class="list-group-item d-flex justify-content-between">
			<span class="todo-item-text">Позавтракать</span>
			<div class="btn-group">
				<button role="button" class="btn btn-outline-dark btn-sm">Важное</button>
				<button role="button" class="btn btn-outline-danger btn-sm">Удалить</button>
			</div>
		</li>
	</ul>

	<!-- Footer -->
	<footer class="d-flex">
		<input type="text" placeholder="Что необходимо сделать" class="form-control me-2" />
		<button type="button" class="btn btn-primary">Добавить</button>
	</footer>

</body>
</html>
