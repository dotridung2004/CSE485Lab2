<?php
    include_once (__DIR__ .'/../config/Database.php');
    class User{
        private $id;
        private $username;
        private $password;
        private $role;

        public function __construct(){}
        public function getId(){
            return $this->id;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getRole(){
            return $this->role;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setUsername($username){
            $this->username = $username;
        }
        public function setPassword($password){
            $this->password = $password;
        }
        public function setRole($role){
            $this->role = $role;
        }

        public function checkUser($username,$password){
            $db = new Database();
            $conn = $db->getConnect();
            $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                return $stmt ->fetch(PDO::FETCH_ASSOC);
            }
            else{
                return false;
            }
        }
    }
?>