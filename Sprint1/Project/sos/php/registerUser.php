<?php
    
     include_once 'Session.php';
     include_once 'MysqlDBC.php';

        $numDocument = $_REQUEST['numDocument'];
        $pass = $_REQUEST['pass'];
        $userName = $_REQUEST['userName'];
        $userSurname = $_REQUEST['userSurname'];
        $birthday = $_REQUEST['birthday'];
        $email = $_REQUEST['email'];
        $cellNum = $_REQUEST['cellNum'];
     
        $sql = "INSERT INTO `patient` (`id_patient`, `numDocument`, `password`, `userName`, `userSurname`, `birthday`, `email`, `cellNum`) VALUES (NULL, '" . $numDocument . "', '" . $pass . "', '" . $userName . "', '" . $userSurname . "', '" . $birthday . "', '" . $email . "', '" . $cellNum . "') ";

        $mysqlDBC = new MysqlDBC();
        $result = $mysqlDBC->insert($sql);
        if ($result != null) {
            createSession($numDocument);
            echo json_encode(array('result' => true));
        } else {
            echo json_encode(array('result' => false));
        }
?>
