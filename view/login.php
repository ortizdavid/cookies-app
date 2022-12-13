<?php 
require_once '../src/Auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Autenticação</title></head>
<body>
    <h2>Autenticação de Usuários</h2>
    <form action="" method="post">
        <label for="">Nome de Usuário:</label>
        <input type="text" name="username" id=""><br>
        <label for="">Senha:</label>
        <input type="password" name="password" id=""><br> <br>
        <button type="submit" name="entrar">Entrar</button>
        <button type="reset">Limpar</button>
        <?php 
            if (isset($_POST['entrar'])) 
            {
                $userName = filter_var($_POST['username']);
                $password = filter_var($_POST['password']);
                Auth::login($userName, $password);
            }
        ?>
    </form>
</body>
</html>