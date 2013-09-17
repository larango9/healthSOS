<?php

    session_name("mainSession");
    session_start();
    
    include 'php/MysqlDBC.php';
    
    if (!$mysqlDBC) 
    {
        $mysqlDBC = new MysqlDBC();
    }
    
    $query = "SELECT * FROM `administrator` WHERE `numDocument` = ". $_SESSION['user'] ;
    $result = $mysqlDBC->select($query);
    
    foreach ($result as $i)
    {
        $name = $i['userName'];
        $lastName = $i['userSurname'];
        $numDoc = $i['numDocument'];
        $birth = $i['birthday'];
        $mail = $i['email'];
        $numCell = $i['cellNum'];
    }
    
    mysqli_close($mysqlDBC);

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Health S.O.S </title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script src="lib/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="controller.js" type="text/javascript"></script>
    </head>
    <body>

        <div id="page">

            <header>
                <!--header-->
                <h1> Health S.O.S </h1>
                <section id="menuRegister">
                    <div id="linkClose" class="eachItemMenu"><p>Salir</p></div>
                </section>
            </header>

            <div id="logo">
                <img    src="imagenes/Logo.jpg">
            </div>

            <div id="separator">
                <hr/>
            </div>


            <div style="text-align:centert">
                <div style="text-align: justify">


                    <div class="container">

                        <ul id="nav">
                            <li><a href="profileAdmin.html"><img src="imagenes/t1.png" />Home</a></li>
                            <li><a href="editProfileAdmin.php"><img src="imagenes/t1.png" />Perfil</a></li>
                            <li><a href="#" class="sub" tabindex="1"><img src="imagenes/t3.png" />Gestionar Medico</a><img src="imagenes/up.gif" alt="" />
                                <ul>
                                    <li><a href="manageDoctor.php"><img src="imagenes/empty.gif" />Tabla General</a></li>
                                    <li><a href="#"><img src="imagenes/empty.gif" />Buscar</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="sub" tabindex="1"><img src="imagenes/t3.png" />Gestionar Paciente</a><img src="imagenes/up.gif" alt="" />
                                <ul>
                                    <li><a href="managePatient.php"><img src="imagenes/empty.gif" />Tabla General</a></li>
                                    <li><a href="#"><img src="imagenes/empty.gif" />Buscar</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="sub" tabindex="1"><img src="imagenes/t3.png" />Gestionar Admin</a><img src="imagenes/up.gif" alt="" />
                                <ul>
                                    <li><a href="manageAdministrator.php"><img src="imagenes/empty.gif" />Tabla General</a></li>
                                    <li><a href="#"><img src="imagenes/empty.gif" />Buscar</a></li>
                                </ul>
                            </li>
                        </ul>

                        <section id="editProfileUser">
                            <form>
                                <h1>Perfil Administrador</h1>

                                <label for="name">Nombre:</label>
                                <input id="name" type="text" name="name" placeholder="Nombre" required="" value="<? echo $name; ?>" />
                                <label for="surname">Apellido:</label>
                                <input id="surname" type="text" name="surname" placeholder="Apellido" required="" value="<? echo $lastName; ?>" />
                                <label for="numberDocument">Número de Documento:</label>
                                <input id="numberDocument" type="text" name="numberDocument" placeholder="Número de Documento" required="" value="<? echo $numDoc; ?>" />
                                <label for="birthday">Fecha de Nacimiento:</label>
                                <input id="birthday" type="date" name="birthday" placeholder="birthday" required="" value="<? echo $birth; ?>" />
                                <label for="email">Email:</label>
                                <input id="email" type="email" name="email" placeholder="ejemplo@correo.com" required="" value="<? echo $mail; ?>" />
                                <label for="cellNumber">Número de Celular:</label>
                                <input id="cellNumber" type="text" name="cellNumber" placeholder="Número de Celular" required="" value="<? echo $numCell; ?>"/>
                                <input class="buttonStyle" id="btnUpdateAdmin" type="button" value="Guardar" />                          
                                <br />
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>