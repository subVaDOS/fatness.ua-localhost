<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Праграмма угадай число</title>
</head>

<body>
<?php
if (isset($_POST['posted']))
{
	$number = rand(1,2);
	if ($_POST['guess'] > $number)

	{
			echo "<h3>Ваше число слишком большое</h3>";
			echo "<br>Загаданное число:$number, Вы проиграли, попробуйте еще раз </hr>";
	}
	else if ($_POST['guess'] < $number)
	{
			echo "<h3>Ваше число слишком маленькое</h3>";
			echo "<br>Загаданное число:$number, Вы проиграли, попробуйте еще раз </hr>";
	}
	else if ($_POST['guess'] > $number)
	{
			echo "<h3>Ваше число слишком большое</h3>";
			echo "<br>Загаданное число:$number, Вы проиграли, попробуйте еще раз </hr>";
	}
	else
	{
			echo "<br>Загаданное число:
			 $number, Вы выиграли? </hr>";
	}
}		
?>

<form method="post" action="guessgame.php">
<input type="hidden" name="posted" value="true">
Угадай число от 1 до 2
<input type="guess" type="text">
<br>
<br>
<input type="submit" value="Отправить">
</form>

</body>
</html>