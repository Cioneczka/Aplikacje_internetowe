<?php require_once dirname(__FILE__) .'/../../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Logowanie</title>
</head>
<body>
<h2>Logowanie</h2>

<?php if (isset($messages)) { ?>
    <ol style="margin: 20px; padding: 10px; background-color: #f88; width:300px;">
        <?php foreach ($messages as $msg) { ?>
            <li><?php echo $msg; ?></li>
        <?php } ?>
    </ol>
<?php } ?>

<form action="<?php print(_APP_URL);?>/app/security/login.php" method="post">
    <label for="id_login">Login: </label>
    <input id="id_login" type="text" name="login" /><br />
    
    <label for="id_pass">Hasło: </label>
    <input id="id_pass" type="password" name="pass" /><br />
    
    <input type="submit" value="Zaloguj" />
</form>

</body>
</html>
