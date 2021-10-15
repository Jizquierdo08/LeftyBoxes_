<?php
session_start();

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$pass=  $_POST["pass"];
$conf_pass = $_POST["conf_pass"];


$dbservername = "localhost";
$dbusername = "usuario";
$dbpassword = "root";
$dbname = 'leftyboxes';

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

$check = false;

function error() {
    $check = true;
    if ($check && isset($_SERVER["HTTP_REFERER"])) {
        $_SESSION["error"] = true;
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    } else {
        echo 'Ocurrió un error';
    }
}



if ($nombre && $email && $pass && $conf_pass) {
    if ($pass != $conf_pass) {
        error();
    } else {
    if (!$conn->connect_error) {
        $sql = "INSERT INTO usuarios(nombre_cliente, email, pass)
        VALUES('$nombre', '$email', '$pass')";

        if ($conn->query($sql) === true) {
            $_SESSION["nombre_cliente"] = $nombre;
            $_SESSION["email"] = $fechaE;
            $_SESSION["costo"] = $email;
            $_SESSION["pass"] = $pass;
            header("Location: http://localhost/Lefty/index.html");
        }else{
            error();
        }
    }else{
        error();
    }
    

}
}else{
    error();
}

$conn->close();
?>