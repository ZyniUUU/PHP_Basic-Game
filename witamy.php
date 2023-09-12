<?php
    session_start();

    if(!isset($_SESSION['udanarejestracja']))
    {
        header('Location: index.php');
        exit();
    
    }
    else
    {
        unset($_SESSION['udanarejestracja']);
        
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Osadnicy - gra przeglądarkowa</title>
</head>
<body bgcolor="greay" text="white">
    
    Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br /><br />
    
    <a href="index.php">Zaloguj się na swoje konto!</a>
    <br /><br />
    


</body>

</html>