<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tin Tức</title>
    <link rel="stylesheet" href="../../css/Admin.css">
</head>
<body>
    <div class="container">
        <h1>QUẢN LÝ TIN TỨC</h1>
        <form action="login.php" method="post">
            <input type="submit" value="Đăng xuất" name="logout">
        </form>
        <table>
            <thead>
                <tr>
                    <th>HÌNH ẢNH</th>
                    <th>TIÊU ĐỀ</th>
                    <th>THỂ LOẠI</th>
                    <th>NỘI DUNG</th>
                    <th>THUỘC TÍNH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/images/khach1.png" alt="Tin tức 1"></td>
                    <td>Nam chính 'Tuổi trẻ giá bao nhiêu' hút mọi ánh nhìn ở hậu trường</td>
                    <td>TRUYỀN HÌNH</td>
                    <td>VTV.vn - Đoàn Thế Vinh đã có những chia sẻ thú vị về hậu trường phim...</td>
                    <td>
                        <a href="news/add.php">
                            <input type="submit" value="Thêm tin tức">
                        </a>
                        <a href="news/edit.php">
                            <input type="submit" value="Sửa tin tức">
                        </a>
                        <a href="news/delete.php">
                            <input type="submit" value="Xóa tin tức">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td><img src="/images/khach2.png" alt="Tin tức 2"></td>
                    <td>Sức sống mãnh liệt của những bài ca về người lính</td>
                    <td>VĂN HÓA-GIẢI TRÍ</td>
                    <td>VTV.vn - Cho đến hôm nay, hình tượng người lính bộ đội Cụ Hồ vẫn...</td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="/images/khach3.png" alt="Tin tức 3"></td>
                    <td>Nữ sĩ Quỳnh Dao tạm biệt cuộc đời ở tuổi 86</td>
                    <td>VĂN HÓA-GIẢI TRÍ</td>
                    <td>VTV.vn - Nhà văn, nhà biên kịch, nhà sản xuất phim nổi tiếng của Đài Loan...</td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="/images/khach4.png" alt="Tin tức 4"></td>
                    <td>Tuổi trẻ giá bao nhiêu - Tập 33: Kiều gian dối để lấy lòng bà Thu</td>
                    <td>TRUYỀN HÌNH</td>
                    <td>VTV.vn - Vốn là người gian dối, mưu mô, Kiều dễ dàng bày trò lấy lòng bà Thu...</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <span>...</span>
            <a href="#">9</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</body>
</html>
