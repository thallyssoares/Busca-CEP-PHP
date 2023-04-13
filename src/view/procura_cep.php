<?php 
    include_once "../controller/validacao_endereco.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>Procura do CEP</title>
</head>
<body>
    <main>
        <h1>Busca do CEP</h1>
        <form action="" method="post">
            <div class="inputArea">
                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="idRua"><br>

                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="idBairro"><br>

                <label for="cidade">Cidade:</label>
                <input type="text" name="cidade" id="idCidade"><br>

                <label for="estado">Estado:</label>
                <input type="text" name="uf" id="idUf"><br>
            </div>
            <input type="submit" value="Pesquisar" class="pesqButton"> <button class="voltarButton"><a href="../../index.php">Voltar</a></button>
        </form>
        <?php 
            if(!empty($_POST["rua"]) && !empty($_POST["cidade"]) && !empty($_POST["uf"]) && !empty($_POST["bairro"])){
                validacao($_POST["uf"], $_POST["cidade"], $_POST["rua"], $_POST["bairro"]);
            } else {
                echo "<p>Preencha todos os campos</p>";
            }
            
        
        ?>
        
    </main>
</body>
</html>