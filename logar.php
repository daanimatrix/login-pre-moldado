<?php

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){ //se exitir o nosso email e empty ( diferente de vazio)

        //chamando as classes 
        require 'conexaoPDO.php';
        require 'class/Usuarios.php';

        //
        $u= new Usuarios(); //instaciando a classe usuario na variavel 

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        echo "achou";
        
      
        if($u->login($email, $senha) == true){ //se usuario e a senha for verdadeiro 
            if(isset($_SESSION['idUser'])){
                header("Location: index2.php");
            }else{
                    header("Location: login.php");  
                }    
            }
        else{
            header("location:  login.php");
        }

    }
?>