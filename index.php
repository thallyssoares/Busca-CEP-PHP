<?php 
    include_once "src/controller/validacao_cep.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Cep</title>
</head>
<body>
    <main>
        <h1>Veja aqui seu endereço</h1>
        <form action="" method="post">
            <label for="cep">Qual o seu Cep?</label>
            <input type="text" name="cep" id="idCep">
            <input type="submit" value="Pesquisar">

            <p>Não sabe seu cep? Veja <a href="src/view/procura_cep.php">aqui</a></p>
        </form>
        <?php 
            if(!empty($_POST["cep"])){
                validador();
            } else {
                echo "<p>Preencha corretamente</p>";
            }
            
        ?>
    </main>
</body>
</html>