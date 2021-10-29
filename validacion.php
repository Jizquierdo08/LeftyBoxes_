<?php
session_start();

$email = $_POST["email"];
$pass =  $_POST["pass"];

$dbservername = "localhost";
$dbusername = "usuario";
$dbpassword = "root";
$dbname = "leftyboxes";


$check = true;

// Create connection
$conn = new mysqli($dbservername, $dbusername,$dbpassword, $dbname);

// Check connection
if (!$conn->connect_error) {
    $sql = "SELECT id_cliente, nombre_cliente, email
                FROM usuarios
             WHERE email = '$email'
                AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["error"] = false;
        $_SESSION["name"] = $row["nombre_cliente"];
        $_SESSION["correo"] = $row["email"];
        header("Location: http://localhost/Lefty/index.html");
        $check = false;
    }
}

if ($check && isset($_SERVER["HTTP_REFERER"])) {
    $_SESSION["error"] = true;
    header("Location: http://google.com" );
} else {
    echo  'Ocurrió un error';
}

?>