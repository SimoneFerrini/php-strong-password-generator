<?php 
    $pswLenght = $_GET['userPswLenght'] ?? 0 ;

    include './functions.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <h1>Generatore di password:</h1>
        <form action="index.php" method="GET">
            <input type="number" placeholder="Insert password lenght" name="userPswLenght">
            <input type="submit" >
        </form>    
        <br>
        <hr>
        <br>

        <?php echo randomPSW($pswLenght)?>

    </div>
</body>
</html>