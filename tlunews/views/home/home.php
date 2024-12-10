<?php 
    include_once(__DIR__ . '/../../controllers/NewsController.php');
    include_once(__DIR__ . '/../../controllers/LoginController.php');
    $select = new NewsController();
    $newsList = $select -> SelectNews();
    $login = new LoginController();
    if(isset($_POST['btn-login'])){
        header('location:tlunews/views/admin/login.php');
    }
    if(isset($_POST['btn-find'])){
        $newsList = $select -> FindNews();
    }
    else{
        $newsList = $select -> SelectNews();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
    <div class="container">
        <div class="home">
            <div class="row">
                <div>
                    <h3 class="text-center m-3">Thông tin những bài đăng</h3>
                </div>
                <div class="col-9">
                    <form action="" method="post">
                    <input type="submit" class="btn btn-outline-primary m-3" value="login" name="btn-login">
                    </form>
                </div>
                <div class="col-3">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Title" name="title">
                            <input type="submit" class="btn btn-outline-secondary"  name="btn-find" value="Find">
                        </div>
                    </form>
                </div>
                <?php foreach($newsList as $key => $newList):?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $newList['image']?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="d-inline-flex gap-1 mx-auto">
                                <button 
                                    class="btn btn-outline-primary ms-5" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse<?php echo $key; ?>" 
                                    aria-expanded="false" 
                                    aria-controls="collapse<?php echo $key; ?>">
                                    Xem chi tiết tin tức
                                </button>
                            </p>
                            <div class="collapse" id="collapse<?php echo $key; ?>">
                                <div class="card card-body">
                                    <h5 class="text-center"><?php echo $newList['title']?></h5>
                                    <p><?php echo $newList['content']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>