<?php

    session_start();

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: gra.php');
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Osadnicy - gra przeglądarkowa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h3>Tylko martwi ujrzeli koniec wojny - Platon</h3><br/>
    <form action="zaloguj.php" method="post">
        <span>Login:</span><br/>
        <input type="text" name="login"/><br/><br/>
        <span>Hasło:</span><br/>
        <input type="password" name="haslo"/><br/><br/>
        <input type="submit" value="Zaloguj się"/>
    </form>

<?php

    if(isset($_SESSION['blad'])) echo $_SESSION['blad'];

?>

</body>
</html>