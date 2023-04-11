<?php 
    include_once "../controller/validacao_endereco.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procura do CEP</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <label for="rua">Rua:</label>
            <input type="text" name="rua" id="idRua"><br>

            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="idCidade"><br>

            <label for="estado">Estado (Apenas as siglas, por favor):</label>
            <input type="text" name="uf" id="idUf"><br>

            <input type="submit" value="Pesquisar">
        </form>
        <?php 
            if(!empty($_POST["rua"]) && !empty($_POST["cidade"]) && !empty($_POST["uf"])){
                validacao($_POST["uf"], $_POST["cidade"], $_POST["rua"]);
            } else {
                echo "<p>Preencha todos os campos</p>";
            }
            
        
        ?>

    </main>
</body>
</html>