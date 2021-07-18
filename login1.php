<?php
    session_start();
    if (isset($_POST['login'] === true))
    {
        $login = trim($_POST['login']);
    }
    if (isset($_POST['password'] === true))
    {
        $password = trim($_POST['password']);
    }

    if($login === 'kk' && $password === 'mkonoha')
    {
        $msg = '登录成功'
        $_SESSION['login'] = $login;
        $_SESSION['name'] = 'MK';
    }
    else
    {
        unset($_SESSION['login']);
        unset($_SESSION['name']);
        header('Location:login.html');
        exit;
    }
?>
<!DOCTYPE html>
<html lang='zh-CN'>
<head>
    <meta charset="utf-8">
    <title>登录界面</title>
</head>
<body>
    <p><?= $msg ?></p>
    <p><a href='login2.php'>确认登录状态</a></p>
</body>
</html>