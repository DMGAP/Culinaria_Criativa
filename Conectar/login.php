<?php 
    include('conectar.php');
    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    session_start();

    //Variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_senha = null;
    $usuario_email =null;

    $valida_usuario = password_hash($_POST['USERemail'], PASSWORD_DEFAULT);
    $valida_senha = password_hash($_POST['USERpwd'], PASSWORD_DEFAULT);
    $sql1 = "SELECT id_Usuario, Email_Usuario, Senha_Usuario FROM cc_usuario WHERE Email_Usuario = '$valida_usuario'";
    
    
    if($result = mysqli_query($conn,$sql1)){
        $row = mysqli_fetch_assoc($result);
        if($resultado){
            if(password_verify($valida_senha,$row['Senha_Usuario'])){
                
                $_SESSION['autenticado']='SIM';
                $userID = $_SESSION['id'] = $row['Id_Usuario'];                           
                $_SESSION['email'] = $row['USERemail'];
                $_SESSION['senha'] = $_POST['USERpwd'];
                $sql2 = "SELECT Primeiro_Nome_Usuario, Ultimo_Nome_Usuario FROM cc_priv_usuario WHERE id_usuario_usuario = '$userID'";
                $resultado = mysqli_query($conn,$sql2);
                $linha = mysqli_fetch_assoc($resultado);
                $_SESSION['nome'] = $linha['Primeiro_Nome_Usuario'];               
                header('Location: minhasReceitas.html');
                
            }else{
                echo"<p style='color:#FF0000'>Senha inválida>";
            }
        }
        else{        
            echo "<script>alert('Usuário conectado com sucesso');</script>";
            header('Location: erro_login.php');
            
        }
    }

?>