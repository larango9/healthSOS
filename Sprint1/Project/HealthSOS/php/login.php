<?php

    include_once 'Session.php';
    include_once 'MysqlDBC.php';
    
    $numDocument = $_REQUEST['numDocument'];
    $pass = $_REQUEST['pass'];

    $sql = "SELECT * FROM `administrator` WHERE `numDocument` = '".$numDocument."' AND `password` = '".$pass."' ";
    
    
    $mysqlDBC = new MysqlDBC();
    $result = $mysqlDBC->select($sql);
    if($result->fetch_assoc()){
        createSession($numDocument);
        echo json_encode(array('result' => true));
    }else{
        echo json_encode(array('result' => false));
    }
        

?>