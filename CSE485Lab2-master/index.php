<?php 
    require_once('tlunews/config/config.php');
    include "tlunews/services/AdminService.php";
    $selectAll = selectAll();
    echo "<pre>";
    print_r($selectAll);
    echo "</pre>";
?>