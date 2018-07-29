<?php
header('Content-Type: text/html; charset=utf-8');
switch ($_GET[weather__type]) {
	case 'Снег':
		echo "Не, лучше не ехать. по крайней мере, не сегодня.";
		break;
		case 'Дождь':
		echo "Плохой вариант. Лучше остаться дома.";
		break;
		case 'Облачно':
		echo "Ехать можно, но нужно взять зонты, а еще лучше остаться дома.";
		break;
		case 'Солнечно':
		echo "Самое время, чтобы поехать.";
		break;
	
	default:
		echo "Syntax error";
		break;
}



$count = 3;
$string = 'У нас всего есть $count яблока.'
echo $string;
	?>