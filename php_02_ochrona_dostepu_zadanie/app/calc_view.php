<?php require_once dirname(__FILE__) .'/../config.php';
require_once dirname(__FILE__) .'/../config.php';
require_once _ROOT_PATH.'/app/security/check.php';  // Dodajemy sprawdzanie logowania
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>
	
<form?

?>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Kwota kredytu </label>
	<input id="id_x" type="text" name="x" value="<?php if(isset($x)) print($x); ?>" /><br />

	<label for="id_op">Oprocentowanie </label>
	<input id="id_op" type="text" name="op" value="<?php if(isset($x)) print($operation); ?>" /><br />
	
	<label for="id_y">Ilość miesięcy </label>
	<input id="id_y" type="text" name="y" value="<?php if(isset($y)) print($y); ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	
<form action="<?php print(_APP_URL);?>/app/security/logout.php" method="post">
<input type="submit" value="Wyloguj">
	</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}

?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>