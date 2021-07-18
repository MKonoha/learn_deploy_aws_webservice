<?php
    $msg = '';
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] == '')
    {
        $msg = '未登录';
    }
    else
    {
        $msg = '你的名字是' . $_SESSION['name'];
    }
?>
<!DOCTYPE html>
<html lang='zh-CN'>
<head>
    <meta charset="utf-8">
    <title>登录信息</title>
</head>
<body>
    <p><?= $msg ?></p>
    <p><?= '您的Session ID是' . session_id(); ?></p>
    <p><a href='login3.php'>登出</a></p>
</body>
</html>