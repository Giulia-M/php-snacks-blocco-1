<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare
-cercando i metodi che non conosciamo nella documentazione-
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 

Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->
<?php
$name = array_key_exists("name", $_GET) ? $_GET["name"] : '';
$mail = array_key_exists("mail", $_GET) ? $_GET["mail"] : '';
$age = array_key_exists("age", $_GET) ? $_GET["age"] : '';

$validMail = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <p>
        <?php
        if(strlen($name) > 3 && strpos ($mail, "@") && strrpos($mail, ".") && is_numeric($age)) {
            
            $validMail = true;

        }

        echo $validMail ? 'accesso consentito' : 'accesso negato';
        
        
        ?>
    </p>
</body>
</html>