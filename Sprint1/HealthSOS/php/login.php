<?php

    include_once 'Session.php';
    include_once 'MysqlDBC.php';
    
    $tipouser = $_REQUEST['tipouser'];
    $tipodocumento = $_REQUEST['tipodocumento'];
    $numerodocumento = $_REQUEST['numerodocumento'];
    $contrasenia = $_REQUEST['contrasenia'];
    $sql = "SELECT * FROM `admin` WHERE `tipoUsuario` = '".$tipouser."' AND `tipoDocumento` = '".$tipodocumento."' AND `numeroDocumento` = '".$numerodocumento."' AND `contrasenia` = '".$contrasenia."' ";
    $mysqlDBC = new MysqlDBC();
    $result = $mysqlDBC->select($sql);
    
    if($result->fetch_assoc()){
        createSession($admin);
        echo json_encode(array('result' => true));
    }else{
        echo json_encode(array('result' => false));
    }   

?>
