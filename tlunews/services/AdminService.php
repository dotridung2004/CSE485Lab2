<?php
require_once APP_ROOT.'';
class AdminService{
    public function connect(){
        $host = "localhost";
        $username = "root";
        $password = "";
        try{
            $conn = new PDO("mysql:host=$host;dbname=tintuc", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }catch(Exception $e){
            echo "".$e->getMessage();
        }
    }
    public function selectAll(){
        $conn = connect();
        $stmt = $conn -> prepare("SELECT * FROM users");
        $stmt -> execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
}
?>