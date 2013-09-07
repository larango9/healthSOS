<?php
    
     include_once 'Session.php';
     include_once 'MysqlDBC.php';

        $nombres = $_REQUEST['nombres'];
        $apellidos = $_REQUEST['apellidos'];
        $tipouser = $_REQUEST['tipouser'];
        $tipodocumento = $_REQUEST['tipodocumento'];
        $numerodocumento = $_REQUEST['numerodocumento'];
        $contrasenia = $_REQUEST['contrasenia'];
        $fechanacimiento = $_REQUEST['fechanacimiento'];
        $numerocelular = $_REQUEST['numerocelular'];
        $sql = "INSERT INTO `admin` (`nombres`, `apellidos`, `tipoUsuario`, `tipoDocumento`, `numeroDocumento`, `contrasenia`, `fechaNacimiento`, `numeroCelular`) VALUES (NULL, '" . $nombres . "', '" . $apellidos . "', '" . $tipouser . "', '" . $tipodocumento . "', '" . $numerodocumento . "', '" . $contrasenia . "', '" . $fechanacimiento . "', '" . $numerocelular . "') ";

        $mysqlDBC = new MysqlDBC();
        $result = $mysqlDBC->insert($sql);
        if ($result != null) {
            createSession($user);
            echo json_encode(array('result' => true));
        } else {
            echo json_encode(array('result' => false));
        }
?>
