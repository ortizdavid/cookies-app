<?php
    require_once '../src/User.php';
    require_once '../src/Auth.php';
    Auth::verifyCookie();
    $currentUser = User::getUserData($_COOKIE['username'], $_COOKIE['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Perfil de Usuário</title></head>
<body>
    <a href="logout.php">Terminar Sessão</a><br>

    <p>Usuário: <?=$currentUser->username;?><br></p>
    <p>Perfil: <?=$currentUser->role;?><br></p>
</body>
</html>