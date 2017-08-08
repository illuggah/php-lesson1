<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>illuggah | about</title>
	<style type="text/css">
		body {font-family: arial;}
		.wrapper {width: 90%; margin: 0 auto;}
		table {font-size: 17px; font-weight: normal;}
		td {padding: 3px 8px;}
	</style>
</head>
<body>
	<?php
		$name = 'Илья';
		$age = '23';
		$mail = '<a href="mailto:illuggah@mail.ru" target="blank">illuggah@mail.ru</a>';
		$homecity = 'Новосибирск';
		$whatabout = 'Звуко/светотехник, радиолюбитель, недавно увлекшийся программированием';
	?>
	<div class="wrapper">
		<h1>Персональная страница пользователя illuggah<h1>
		<table>
			<tr><td>Имя</td><td><?=$name?></td></tr>
			<tr><td>Возраст</td><td><?=$age?></td></tr>
			<tr><td>Адрес электронной почты</td><td><?=$mail?></td></tr>
			<tr><td>Город</td><td><?=$homecity?></td></tr>
			<tr><td>О себе</td><td><?=$whatabout?></td></tr>
		</table>
	</div>
</body>
</html>
