<?php
    session_name("mainSession");
    session_start();

    include_once 'Session.php';
    include_once 'MysqlDBC.php';

    $numDocument = $_REQUEST['numDocument'];
    $userName = $_REQUEST['userName'];
    $userSurname = $_REQUEST['userSurname'];
    $birthday = $_REQUEST['birthday'];
    $email = $_REQUEST['email'];
    $cellNum = $_REQUEST['cellNum'];
     
    $sql = "UPDATE administrator SET numDocument='".$numDocument."', userName='".$userName."', userSurname='".$userSurname."', birthday='".$birthday."', email='".$email."', cellNum='".$cellNum."' WHERE numDocument='".$_SESSION['user']."';";
    echo $sql;
    
    if (!$mysqlDBC) 
    {
        $mysqlDBC = new MysqlDBC();
    }
    
    $mysqlDBC = new MysqlDBC();
    $result = $mysqlDBC->update($sql);
    echo $result;
    if ($result != null) {
        createSession($numDocument);
        mysqli_close($mysqlDBC);
        echo json_encode(array('result' => true));
    } else {
        mysqli_close($mysqlDBC);
        echo json_encode(array('result' => false));
    }
?>
