<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Inicio Sesion</title>
    </head>

    <body>
        <script src="script.js"></script>
        <div class="container" id="container">
            <div class="form-container empresas-container">
                <form action="validar_sesion_empresa.php" method="post">
                    <h1>Cuenta de Empresa</h1>
                    <input type="email" id="emailem" name="emailem" placeholder="Email" required/>
                    <input type="password" placeholder="Password" name="passwordem" id="passwordem"required/>
                    <button>Inicia Sesión</button>
                    <p>¿Acabas de empezar? <a class="Registrate" href="../Registro/registro.html">Registrate</a></p>
                    <?php
                        if(isset($_GET["control"])) { 
                            $userControl = $_GET['control'];
                            if($userControl != null){
                                if($userControl == 2){
                                    echo"<h4>Hay algun problema con el correo </h4>";
                                }elseif($userControl == 3){
                                    echo"<h4>Hay algun problema con la contraseña</h4>";
                                }
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="validar_sesion.php" method="post">
                    <h1>Inicia Sesión</h1>
                    <input type="email" id="email" name="email" placeholder="Email" required/>
                    <input type="password" id="password" name="password" placeholder="Password" required/>
                    <button>Inicia Sesión</button>
                    <p>¿No tienes una cuenta? <a class="Registrate" href="../Registro/registro.html">Registrate</a></p>
                    <?php
                        if(isset($_GET["control"])) { 
                            $userControl = $_GET['control'];
                            if($userControl != null){
                                if($userControl == 2){
                                    echo"<h4>Hay algun problema con el correo </h4>";
                                }elseif($userControl == 3){
                                    echo"<h4>Hay algun problema con la contraseña</h4>";
                                }
                            }
                        }
                    ?>
                </form>
            </div>
            <!--Este contenedor cambia de lado tapando -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>¡Bienvenido de vuelta!</h1>
                        <p>¿A que esperas para seguir influyendo en tus videojuegos favoritos?</p>
                        <button class="ghost" id="signIn">usuario</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>¿Eres una empresa?</h1>
                        <p>!Puedes acceder a tus encuentas por aquí!</p>
                        <button class="ghost" id="signUp">empresa</button>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            <span></span> <span></span> 
        </section>
    </body>
</html>
