<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Tin Tức</title>
    <link rel="stylesheet" href="../../../css/AED.css">
</head>
<body>
    <div class="container">
        <h1>THÊM TIN TỨC</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="title">TIÊU ĐỀ</label>
                <input type="text" id="title" name="title" placeholder="Nhập tiêu đề" required>
            </div>
            <div class="form-group">
                <label for="content">NỘI DUNG</label>
                <textarea id="content" name="content" placeholder="Nhập nội dung" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">HÌNH ẢNH</label>
                <input type="file" id="image" name="images" accept="image/*" required>
            </div>
            <button type="submit" class="submit-button" name="btn-add">THÊM TIN TỨC</button>
        </form>
    </div>
</body>
</html>
