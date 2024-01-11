<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/front/css/login.css">
    <title> Login - Página Teste </title>
</head>

<body>
    <section>
        <div class="formbox">
            <form action="_login.php" method="POST">
                <h2> LOGIN </h2>
            <?php
            session_start();
            if(isset($_SESSION['msg'])):
                echo '<p class="msg">'.$_SESSION['msg'].'</p>';
                unset($_SESSION['msg']);
            endif;
            ?>
                <div class="inputbox">
                    <label for=""> User: </label>
                    <input type="text" name="user">
                </div>
                
                <div class="inputbox">
                    <label for=""> Password: </label>
                    <input type="password" name="password">
                </div>                
                    <button> ENTRAR </button> <br> <br>
		    <a href="site.php"> Ir para o site </a> <br> <br>
            <a href="registrar.php"> Registrar-se </a>
            </form>
        </div>
    </section>
</body>

</html>