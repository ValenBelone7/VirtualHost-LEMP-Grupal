<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <?php
    $servername = "localhost";
    $username = "usuario_php";
    $password = "Valen123!"; // reemplazá esto
    $dbname = "mi_sitio_web";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT nombre, precio FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Precio</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nombre"]. "</td><td>$" . $row["precio"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No hay productos disponibles.";
    }
    $conn->close();
    ?>
</body>
</html>
