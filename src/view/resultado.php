<?php 
    include_once "../controller/retorno.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu CEP</title>
</head>
<body>
    <main>
        <h1>Seu Endereço</h1>
        <?php 
            retorno();
        ?>
    </main>
</body>
</html>