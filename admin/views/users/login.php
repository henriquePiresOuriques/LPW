<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Login Form -->
        <form action="?c=u&a=vl" method="POST" name="formulario" id="formulario">
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
        <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Senha">
        <input type="submit" class="fadeIn fourth" name="Enviar" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>
</body>
</html>