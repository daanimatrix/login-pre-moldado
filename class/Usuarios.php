<?php

class Usuarios{

    public function login($email, $senha){

        global $pdo;
        
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        //preparando o banco de dados para a variavel sql, que vai entrar 2 dados como nome email, e senha para verificação no banco e executar.
        $sql= $pdo->prepare($sql);
        $sql->bindValue("email",$email);
        $sql->bindValue("senha",md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){//quanto for verdadeiro (contar todos os dados for menor que zero ) ele vai fazer:
            $dado =  $sql->fetch();//esta jogando um unico dado na variavel.//fetch:ele cria meio que um array,

            // echo $dado['idusuario'];//O usuario que o dado vai mostrar é [idusuario]

            $_SESSION['idUser'] = $dado['idusuario']; //usuario X é igual a seção X 

            return true;//vai retorna verdadeiro
            
        }else{
            return false;//Vai retorna falso
        }
    }
}


?>