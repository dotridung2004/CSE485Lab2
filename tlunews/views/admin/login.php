<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/login.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="container d-flex shadow rounded overflow-hidden" style="width: 70%; height: 70%;">
        <div class="col-md-6 d-none d-md-block" id="bg-login"></div>
            <div class="col-md-6 bg-white d-flex flex-column justify-content-center align-items-center p-5">
                <div class="w-100" style="max-width: 300px;">
                    <h2 class="mb-4 text-center">Đăng Nhập</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" id="username" class="form-control" placeholder="Tên đăng nhập" name="username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" id="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        </div>
                        <input type="submit" class="btn btn-outline-primary w-100" name="login" value="Đăng nhập">
                    </form>
                    <hr class="my-4">
                    <div class="text-center">
                        <p class="mb-3">Đăng nhập bằng</p>
                        <button class="btn btn-primary w-100 mb-2" style="background-color: #3b5998;">Facebook</button>
                        <button class="btn btn-danger w-100 mb-2">Google</button>
                        <button class="btn btn-dark w-100">Apple</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
