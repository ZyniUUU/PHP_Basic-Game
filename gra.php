<?php

    session_start();

    if(!isset($_SESSION['zalogowany']))
    {
        header('Location: index.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Osadnicy - gra przeglądarkowa</title>
</head>
<body>

<?php

    echo"<p>Witaj ".$_SESSION['user'].'! [<a href="logout.php">Wyloguj się!</a>]</p>';
    echo"<p><b>Drewno<b/>:".$_SESSION['drewno'];
    echo"|<b>Kamień<b/>:".$_SESSION['kamien'];
    echo"|<b>zboże<b/>:".$_SESSION['zboze']."</p>";
    echo"<p><b>E-mail<b/>:".$_SESSION['email'];
    echo"<br /><b>Dni Premium<b/>:".$_SESSION['dnipremium']."</p>";
    

    
?>
    

</body>

</html>