<?php
$servername = "localhost";
$username = "root";
$password = "tilin";
$dbname = "Tiliners";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña']; // Contraseña no encriptada

    $sql = "INSERT INTO Usuarios (nombre_usuario, email, contraseña) VALUES ('$nombre_usuario', '$email', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
