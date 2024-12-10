<?php
    include_once (__DIR__ .'/../config/Database.php');
    class News{
        private $id;
        private $title;
        private $content;
        private $image;
        private $created_at;
        private $category_id;

        public function __construct(){}

        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getContent(){
            return $this->content;
        }

        public function getImage(){
            return $this->image;
        }
        public function getCreatedAt(){
            return $this->created_at;
        }
        public function getCategoryId(){
            return $this->category_id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        public function setContent($content){
            $this->content = $content;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function setCreated_at($created_at){
            $this->created_at = $created_at;
        }
        public function setCategoryId($category_id){
            $this->category_id = $category_id;
        }

        public function SelectAllNews() {
            $db = new Database();
            $conn = $db->getConnect();
            $stmt = $conn->prepare("SELECT * FROM news");
            $stmt->execute();
            $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function AddNews($title, $content, $image, $category_id) {
            try {
                $db = new Database();
                $conn = $db->getConnect();
                $stmt = $conn->prepare("INSERT INTO news (title, content, image, category_id) VALUES (:title, :content, :image, :category_id)");
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':image', $image);
                $stmt->bindParam(':category_id', $category_id);
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
                return false;
            }
        }
        
        public function UpdateNews($id,$title, $content, $image, $category_id){
            try {
                $db = new Database();
                $conn = $db -> getConnect();
                $stmt = $conn -> prepare("UPDATE news SET title = :title,content = :content,image = :image,category_id = :category_id WHERE id = :id");
                $stmt -> bindParam(':title',$title);
                $stmt -> bindParam(':content',$content);
                $stmt -> bindParam(':image',$image);
                $stmt -> bindParam(':category_id',$category_id);
                $stmt -> bindParam(':id',$id);
                $stmt -> execute();
                return true;
            } catch (PDOException $e) {
                echo "Lỗi: " . $e->getMessage();
                return false;
            }
        }

        public function DeleteNews($id){
            try{
                $db = new Database();
                $conn = $db -> getConnect();
                $stmt = $conn -> prepare("DELETE FROM news where id = :id ");
                $stmt -> bindParam(':id',$id);
                $stmt -> execute();
                return true;
            }catch(PDOException $e){
                echo "Lỗi: " . $e->getMessage();
                return false;
            }
        }

        public function FindNews($title){
            $db = new Database();
            $conn = $db -> getConnect();
            $stmt = $conn -> prepare("SELECT * FROM news WHERE title = :title");
            $stmt -> bindParam(':title',$title);
            $stmt -> execute();
            $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            return $result;
        }
    }
?>