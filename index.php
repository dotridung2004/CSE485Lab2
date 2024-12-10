<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="tlunews/css/Admin.css">
    <link rel="stylesheet" href="tlunews/css/login.css">
    <link rel="stylesheet" href="tlunews/css/index.css">
</head>
<body>
    <?php
        include_once (__DIR__ ."/tlunews/controllers/LoginController.php");
        include_once (__DIR__ ."/tlunews/controllers/NewsController.php");
        include_once (__DIR__ . "/tlunews/views/home/home.php");
        $controller = new LoginController();
        $select = new NewsController();
        $select -> SelectNews();
        $controller->login();
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
