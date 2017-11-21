<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar Cuenta</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="css/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="css/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="css/custom.min.css" rel="stylesheet">

    </head>
    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <?php 
                        $invalid=sha1(md5("contrasena y email invalido"));
                        if (isset($_GET['invalid']) && $_GET['invalid']==$invalid) {
                            echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                <strong>Error!</strong> Contraseña o correo Electrónico invalido
                                </div>";
                        }
                    ?>
                    <section class="login_content">
                        <form action="action/login.php" method="post">
                            <h1>Registrar Cuenta</h1>
                            <div>
                                <input type="text" name="text" class="form-control" placeholder="Nombre Completo" required />
                            </div>
                            <div>
                                <input type="email" name="correo" class="form-control" placeholder="Correo electrónico" required/>
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Validar Contraseña" required />
                            </div>
                            <div>
                                <button type="submit" name="token" value="Login" class="btn btn-default">Crear cuenta</button>
                                <a class="reset_pass" href="index.php">Iniciar Sessión</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-book"></i> ControlGeek!</h1>
                                    <p> <a style="text-decoration: underline;" target="_blank" href="http://github.com/amnersaucedososa">Soporte</a>is a Bootstrap 3 template. Privacy and Terms by <a target="_blank" style="text-decoration: underline;" href="https://github.com/chelitodelgado">Chelo.inc</a></p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>