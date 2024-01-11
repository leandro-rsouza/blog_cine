<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/front/css/register.css">
    <title> Registrar - Página Teste </title>
</head>

<body>
    <section>
        <div class="formbox">
            <form action="_register.php" method="post">
                <h2> REGISTRAR </h2>
                <div class="container">
                    <div class="personal">
                        <div class="inputbox">
                            <label for=""> Nome: </label>
                            <input type="text" name="nome" id="nome">
                        </div>
                        
                        <div class="inputbox">
                            <label for=""> Email: </label>
                            <input type="text" name="email" id="email">
                        </div>
                    </div>

                    <div class="user">    
                        <div class="inputbox">
                            <label for=""> Usuário: </label>    
                            <input type="text" name="user" id="user">
                        </div>
                    
                        <div class="inputbox">
                            <label for=""> Nova Senha: </label>
                            <input type="password" name="password">
                        </div>
                        
                        <div class="inputbox">
                            <label for=""> Confirmar Senha: </label>
                            <input type="password" name="password_confirm">
                        </div>
                    </div>
                </div>

                <?php
                session_start();
                    if(isset($_SESSION['msg'])):
                        echo '<p class="msg">' .$_SESSION['msg']. '</p>';
                        unset($_SESSION['msg']);
                    endif;
                ?>
                    <button> ENVIAR </button> <br> <br>
                    <a href="index.php"> Login </a>
            </form>
        </div>
    </section>
    </body>
</html>