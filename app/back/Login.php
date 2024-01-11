<?php

namespace app\back;

use app\back\Usuario;

class Login
{
    public function log(Usuario $u)
    {
        $query = 'SELECT id FROM usuario WHERE user = ? AND password = ?';

        $login = Conexao::Conn()->prepare($query);
        $login->bindValue(1, $u->getUser());
        $login->bindValue(2, $u->getPassword());
        $login->execute();

        if($login->rowCount() > 0):
            
            $dado = $login->fetch();
            $_SESSION['id'] = $dado['id'];

            return true;
        
        else:
        
            return false;
        
        endif;
    }

    public function register(Usuario $u)
    {
        $rand = rand(1,9999);
        $query = 'INSERT INTO usuario VALUES (?,?,?,?,?)';

        $insert = Conexao::Conn()->prepare($query);
        $insert->bindValue(1, $rand);
        $insert->bindValue(2, $u->getNome());
        $insert->bindValue(3, $u->getEmail());
        $insert->bindValue(4, $u->getUser());
        $insert->bindValue(5, $u->getPassword());
        $insert->execute();
    }

    public function read(){
        $query = 'SELECT * FROM usuario';

        $read = Conexao::Conn()->prepare($query);
        $read->execute();

        if($read->rowCount() > 0):
            $result = $read->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        else:
            return [];
        endif;
    }

    public function edit($id)
    {
        $query = 'SELECT * FROM usuario WHERE id = ?';

        $edit = Conexao::Conn()->prepare($query);
        $edit->bindValue(1, $id);
        $edit->execute();

        if($edit->rowCount() > 0):
            $result = $edit->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        else:
            return [];
        endif;
    }

    public function update(Usuario $u)
    {
        $query = 'UPDATE usuario SET nome = ?,  email = ?, user = ?, password = ? WHERE id = ?';

        $update = Conexao::Conn()->prepare($query);
        $update->bindValue(1, $u->getNome());
        $update->bindValue(2, $u->getEmail());
        $update->bindValue(3, $u->getUser());
        $update->bindValue(4, $u->getPassword());
        $update->bindValue(5, $u->getId());
        $update->execute();
    }

    public function delete($id)
    {
        $query = 'DELETE FROM usuario WHERE id = ?';

        $delete = Conexao::Conn()->prepare($query);
        $delete->bindValue(1, $id);
        $delete->execute();
    }
}
