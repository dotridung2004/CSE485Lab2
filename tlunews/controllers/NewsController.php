<?php
require_once __DIR__ . "/../models/News.php";
require_once __DIR__ . "/../models/Category.php";

class NewsController {

    public function SelectNews() {
        $newsModel = new News();
        $newsList = $newsModel->SelectAllNews();
        return $newsList;
    }
    public function GetCategories() {
        $categoryModel = new Category();
        $category = $categoryModel->SelectAllCategory();
        return $category;
    }
    public function CreateNews() {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $image = $_POST["image"];
        $category_id = $_POST["category_id"];
        $newsModel = new News();
        $Addnews = $newsModel->AddNews($title, $content,$image,$category_id);
        return $Addnews;
    }

    public function UpdateNews(){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $category_id = $_POST['category_id'];
        $NewsModel = new News();
        $UpdateNews = $NewsModel -> UpdateNews($id,$title,$content,$image,$category_id);
        return $UpdateNews;
    }

    public function DeleteNews(){
        $id = $_POST['id'];
        $NewsModel = new News();
        $DeleteNews = $NewsModel -> DeleteNews($id);
        return $DeleteNews;
    }
}
?>
