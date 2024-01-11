<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/front/css/read.css">
    <title> Consultar Usuários </title>
</head>
<body>
    <section>
        <table>
            <tr class="title">
                <td> Nome </td>
                <td> Email</td>
                <td> Usuário </td>
                <td> Ações </td>
            </tr>
            <?php
            require_once 'vendor/autoload.php';
                $user = new app\back\Login;
                $user->read();

                foreach($user->read() as $pessoa):

                    echo '<tr>';
                    echo '<td>'.$pessoa['nome'].'</td>';
                    echo '<td>'.$pessoa['email'].'</td>';
                    echo '<td>'.$pessoa['user'].'</td>';
                    echo '<td class="acoes">'; 
                    echo '<a href="_del.php?id='.$pessoa["id"].'"> Deletar </a>';
                    echo '<a href="_edit.php?id='.$pessoa["id"].'"> Alterar </a>';
                    echo '</td>';
                    echo '</tr>';

                endforeach;
            ?>
        </table>
    </section>
</body>
</html>

