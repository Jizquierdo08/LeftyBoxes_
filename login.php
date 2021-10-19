<?php
    session_start();
    $error = isset($_SESSION['error']) ? $_SESSION['error'] : false;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style-login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/style-empaque.css">

    <link rel="stylesheet" href="css/style-footer.css">
    <script src="https://kit.fontawesome.com/f0f6311dd7.js" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
</head>
<body>
    <header class="header">
        <div class="banner">
            <p>¡Conoce todo lo nuevo que tenemos para ti!</p>
        </div>        
        <nav class="nav">
            <a href="index.html" class="logo "><img src="imagenes/logo.jpg" alt="LeftyBoxes"></a>
            <button class="nav-toggle" aria-label="Abrir Menú">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="index.html" class="nav-menu-link nav-link ">Inicio</a></li>
                <li class="nav-menu-item"><a href="productos.html" class="nav-menu-link nav-link">Productos</a></li>

                <li class="nav-menu-item"><a href="contacto.html" class="nav-menu-link nav-link">Contacto</a></li>
                <li class="nav-menu-item"><a href="conocenos.html" class="nav-menu-link nav-link">Conócenos</a></li>
                <li class="nav-menu-item"><a href="#">
            </ul>            
            <ul class="icons">
                <li class="nav-menu-item"><a href="registro.html">
                    <button class="buttons">
                        <i class="fas fa-user"></i>
                    </button>
                </a>
                </li>
                <li class="nav-menu-item"><a href="#">
                    <button class="buttons">
                        <i class="fas fa-shopping-bag"></i>
                    </button>
                </a>
                </li>
            </ul>
        </nav>             
    </header>
    <div class="background-container">
        <div class="card">
            <div class="card-body">
                <h1 class="title">Bienvenido</h1>
                <form id="login-form" action="validacion.php" method="POST">                
                    <div class="form-container">
                        <input class="text-input" name="email"                                                                                                                                                                  "
                            type="text" placeholder="Email">
                        <input class="text-input" name="pass"
                            type="password" placeholder="Contraseña">
                    </div>
                    <input class="submit-input" 
                        type="submit" value="Iniciar">
                </form>
            </div>
        </div>

    </div>
</body>
</html>
<?php
    $_SESSION['error'] = false;
?>