<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="main/Docente/img/logo2.png">  
    <title>
        Inicio
    </title>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<div class ="login">
<div class="logo"> <img class="classLogo"src="img/logo1.png"></div>
    <div class ="form">
        <form action="" id="formlg" method = "post">
            <input class="usr" id="mail"type="text" name="usuariolg" required placeholder="Mail"
                oninvalid="this.setCustomValidity('Falta un usuario!')"
                oninput="this.setCustomValidity('')"/><br>
            <input id="contrasena"class="pwd" type="password" name="passlg" required placeholder="Contraseña"
                oninvalid="this.setCustomValidity('Falta una contraseña!')"
                oninput="this.setCustomValidity('')"/><br>
            <input class="BtLogin" type="submit" value="Iniciar sesion" name="botonlg"> 
        </form>
    </div>
</div>
 
<script  src="js/jquery-3.6.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/main.js"></script>

</body>
</html>
