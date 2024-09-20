
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>-
    <div class="page">
       <form method="POST" action="login.php" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label>nome de usuario</label>
            <input type="text" placeholder="Digite seu usuario" autofocus="true" name="nome_usuario" />
            <label>Senha</label>
            <input type="password" placeholder="Digite seu e-mail" name="senha" />
            <input type="submit" value="Acessar" class="btn" />
            <a href="cadastro.php">Cadastre-se</a>
        </form>
        <?php 
         if (isset($_POST['nome_usuario'])){
         $nome_usuario= $_POST['nome_usuario'];
         $senha=$_POST['senha'];

         if (($nome_usuario=="eduarda") and ($senha=="barrao")){
            session_start();
            $_SESSION['nome_usuario']= $nome_usuario;
            header(header: "location: restrito");
         } else{
            echo "login invalido";
         }
        }
        
        ?>
       

    </div>
    
</body>
</html>
