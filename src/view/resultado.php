<?php 
    include_once "../controller/retorno_cep.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>Seu CEP</title>
</head>
<body>
    <main>
        <h1>Seu Endereço</h1>
        <div class="retorno">
        <?php 
            retorno();
        ?>
        </div>
        <button class="voltarButton"><a href="../../index.php">Voltar</a></button>
    </main>
</body>
</html>