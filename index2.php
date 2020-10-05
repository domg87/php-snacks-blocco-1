<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
   //variabile
    $name = isset($_GET["name"]);
    // controlliamo se il nome abbia una lunghezza uguale o maggiore di 3 caratteri
    if(strlen($name) >= 3) {
        $name = "Accesso riuscito!!";
    } 
    

    $email = isset($_GET["email"]);
    // controlliamo se nell'inserimenrto dei dati, la email contenga @ o "."
    if(!strpos($email, "@") || !strpos($email, ".")) {
        $email = "Accesso negato!!";
    } 

    $age = isset($_GET["age"]);
    // controlliamo se l'eta sia un numero
    if(is_numeric($age)) {
        $age = "Accesso negato!!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snach2</title>
</head>
<body>
    <h2>Nome: 
        <?php echo $name  ?>
    </h2>
    <h2>Email: 
        <?php echo $email  ?>
    </h2>
    <h2>Eta`:
        <?php echo $age  ?>
    </h2>
</body>
</html>
