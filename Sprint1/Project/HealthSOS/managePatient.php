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
                <section id="menuInit">
                    <div id="linkRegister" class="eachItemMenu"><p>Registrar</p></div>
                    <div id="linkLogin" class="eachItemMenu"><p>Login</p></div>
                </section>
                <section id="menuRegister">
                    <div id="linkClose" class="eachItemMenu"><p>Salir</p></div>
                </section>
            </header>

            <div id="logo">
                <img    src="imagenes/Logo.jpg">
            </div>

            <div id="menuhoriz">

                <ul>  
                    <li> <a href="index.html"> Inicio</a></li>
                    <li> <a href="services.html"> Servicios</a></li>
                    <li> <a href="contact.html"> Contactenos</a></li>
                </ul>
            </div>


            <div style="text-align:centert">
                <div style="text-align: justify">


                    <div class="container">

                        <ul id="nav">
                            <li><a href="profileAdmin.html"><img src="imagenes/t1.png" />Home</a></li>
                            <li><a href="editProfileAdmin.html"><img src="imagenes/t1.png" />Perfil</a></li>
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
                        <div id="text2">
                            <article>
                                <h4>Información Pacientes</h4>
                                <p>En este espacio podrá observar una tabla con los registros completos de los pacientes almacenados</p>
                                <p>en la base de datos.</p>
                            </article>
                        </div>

                        <?php
                        include 'php/MysqlDBC.php';

                        $mysqlDBC = new MysqlDBC();

                        /* Realizamos la consulta SQL */
                        $sql = "select * from patient";
                        $result = $mysqlDBC->select($sql);

                        if (mysqli_num_rows($result) == 0)
                            die("No hay registros para mostrar");

                        /* Desplegamos cada uno de los registros dentro de una tabla */
                        echo "<table border=1 cellpadding=4 cellspacing=0 align=right>";

                        /* Encabezados de cada Columna */
                        echo "<tr>
                            <th colspan=8 align=center> Tabla General Paciente </th>
                            <tr>
                            <th> Id </th><th> Num Cedula </th><th> Contraseña </th><th> Nombre </th> 
                            <th> Apellido </th><th> Fecha Nacimiento </th><th> Email </th><th> Num Celular </th>
                            </tr>";
                        /* Y ahora todos los registros */
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>
                                <td align='right'> $row[id_patient] </td>
                                <td> $row[numDocument] </td>
                                <td> $row[password] </td>
                                <td> $row[userName] </td>
                                <td> $row[userSurname] </td>
                                <td> $row[birthday] </td>
                                <td> $row[email] </td>
                                <td> $row[cellNum] </td>
                                </tr>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>