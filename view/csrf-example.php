<?php 
require_once '../src/CSRF.php';
?>
<!DOCTYPE html>
<html lang="en">
<head><title>CSRF</title></head>
<body>
    <h2>Testando Ataques CSRF</h2>
    <form action="" method="POST">
        <?php CSRF::prevent();?>
        Nome: <input type="text" name="nome" placeholder="Digite o Nome" autofocus><br>
        Data de Nascimento: <input type="date" name="data_nasc" id=""><br><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
    <?php
        if (isset($_POST['enviar'])) 
        {
            $token = $_POST['csrf_token'];
            CSRF::inspect($token);
            CSRF::check($token);

            $nome = filter_var($_POST['nome']);
            $dataNasc = filter_var($_POST['data_nasc']);
           
            echo "<h3>Dados Submetidos com Sucesso!</h3>";
            echo "Nome: {$nome}<br>Data de Nascimento: {$dataNasc}";
        }
    ?>
</body>
</html>