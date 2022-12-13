<?php
    require_once '../src/User.php';
    require_once '../src/Auth.php';
    Auth::reconizeSession();
    $currentUser = User::getUserData($_SESSION['username'], $_SESSION['password']);
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Perfil de Usuário</title></head>
<body>
    <a href="logout.php">Terminar Sessão</a><br>

    <p>Usuário: <?=$currentUser->username;?><br></p>
    <p>Perfil: <?=$currentUser->role;?><br></p>
    <p>ID de Sessão: <?=session_id();?></p>
</body>
</html>