<?php
    ob_start();
    require_once __DIR__ ."/tlunews/controllers/LoginController.php";
    require_once __DIR__ . "/tlunews/views/admin/login.php";
    $controller = new LoginController();  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['logout'])) {
            $controller->logout();
        }
    }
    $controller->login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="tlunews/css/Admin.css">
</head>
<body>
    
</body>
</html>
