<?php
include 'MysqlDBC.php';

$mysqlDBC = new MysqlDBC();

/* Realizamos la consulta SQL */
$sql = "select * from user";
$result = $mysqlDBC->select($sql);

if (mysqli_num_rows($result)==0)
    die("No hay registros para mostrar");

/* Desplegamos cada uno de los registros dentro de una tabla */
echo "<table border=1 cellpadding=4 cellspacing=0>";

/* Encabezados de cada Columna */
echo "<tr>
         <th colspan=8> Tabla User </th>
       <tr>
         <th> Id </th><th> Num Cedula </th><th> Contrasenia </th> <th> Nombre </th> <th> Apellido </th><th> Cumple </th>
         <th> email </th><th> celular </th>
      </tr>";

/* Y ahora todos los registros */
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
        <td align='right'> $row[id_user] </td>
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
