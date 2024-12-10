<?php 
    include '../../controllers/NewsController.php';
    include '../../controllers/LoginController.php';
    $select = new NewsController();
    $category = $select -> GetCategories();
    if(isset($_POST['btn-find'])){
        $newsList = $select -> FindNews();
    }
    else{
        $newsList = $select -> SelectNews();
    }
    if(isset($_POST['btn-add'])){
        $AddNews = $select -> CreateNews();
    }
    if(isset($_POST['btn-update'])){
        $UpdateNews = $select -> UpdateNews();
    }
    if(isset($_POST['btn-delete'])){
        $DeleteNews = $select -> DeleteNews();
    }
    $controller = new LoginController();
    if (isset($_POST['logout'])) {
        $controller->logout();
    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tin Tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center m-3">QUẢN LÝ TIN TỨC</h1>
            </div>
            <div class="col-10">
                <input type="submit" class="btn btn-outline-primary m-2" name="btn-add" value="Create" data-bs-toggle="modal" data-bs-target="#btn-add-Modal">
            </div>
            <div class="col-2">
                <form action="" method="post">
                    <input type="submit" class="btn btn-outline-secondary m-2" value="Out Login" name="logout">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Created_at</th>
                            <th>Category_id</th>
                            <th>Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($newsList as $news): ?>
                        <tr>
                            <td><?php echo $news['id']?></td>
                            <td><?php echo $news['title']?></td>
                            <td><?php echo $news['content']?></td>
                            <td>
                                <img src="<?php echo $news['image']?> " alt="Ảnh sản phẩm" width="100">
                            </td>
                            <td><?php echo $news['created_at']?></td>
                            <td><?php echo $news['category_id']?></td>
                            <td>
                                <div class="d-flex">
                                    <input type="submit" value="Update" class="btn btn-outline-warning m-2"  data-bs-toggle="modal" data-bs-target="#btn-edit-Modal">
                                    <input type="submit" value="Delete" class="btn btn-outline-danger m-2"  data-bs-toggle="modal" data-bs-target="#btn-delete-Modal">
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


            <!-- Model-AddNews -->
            <div class="modal fade" id="btn-add-Modal" tabindex="-1" aria-labelledby="btn-add-ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="btn-add-ModalLabel">Create News</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <input type="text" name = "title" class="form-control" placeholder="Title" id="addtitle" required><br>
                                    <label for="addtitle">Title</label>
                                </div>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <textarea class="form-control" placeholder="Content" id="floatingTextarea2" style="height: 100px" name="content"></textarea><br>
                                    <label for="floatingTextarea2">Content</label>
                                </div>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <input type="text" class="form-control" placeholder="image" id="addimage" name="image" required>
                                    <label for="addimage">Image</label>
                                </div>
                                <br>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <select name="category_id" id="category_id" class="form-select" placeholder="Category" required>
                                        <label for="category_id">Category_id</label>
                                        <?php foreach ($category as $categories): ?>
                                            <option value="<?php echo $categories['id']; ?>"><?php echo $categories['id'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save Changes" name="btn-add">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal-UpdateNews -->
            <div class="modal fade" id="btn-edit-Modal" tabindex="-1" aria-labelledby="btn-edit-ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="" method="post">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="btn-edit-ModalLabel">Update News</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <select name="id" id="IDNews" class="form-select" placeholder="ID News" required>
                                        <label for="IDNews">ID</label>
                                        <?php foreach ($newsList as $newList): ?>
                                            <option value="<?php echo $newList['id'];?>"><?php echo $newList['id'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <input type="text" name = "title" class="form-control" placeholder="Title" id="edittitle" required><br>
                                    <label for="edittitle">Title</label>
                                </div>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <input type="text" name = "content" class="form-control" placeholder="Content" id="editcontent" required><br>
                                    <label for="editcontent">Content</label>
                                </div>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <input type="text" name = "image" class="form-control" placeholder="Image" id="editimage" required>
                                    <label for="editimage">Image</label>
                                </div>
                                <br>
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <select name="category_id" id="category_id" class="form-select" placeholder="Category" required>
                                        <label for="category_id">Category_id</label>
                                        <?php foreach ($category as $categories): ?>
                                            <option value="<?php echo $categories['id']; ?>"><?php echo $categories['id'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save Changes" name="btn-update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal-DeleteNews -->
            <div class="modal fade" id="btn-delete-Modal" tabindex="-1" aria-labelledby="btn-delete-ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="" method="post">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="btn-delete-ModalLabel">Delete News</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mx-auto" style="width: 400px;">
                                    <select name="id" id="IDNews" class="form-select" placeholder="ID News" required>
                                        <label for="IDNews">ID</label>
                                        <?php foreach ($newsList as $newList): ?>
                                            <option value="<?php echo $newList['id'];?>"><?php echo $newList['id'];?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save Changes" name="btn-delete">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
