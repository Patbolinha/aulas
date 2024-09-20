<?php

session_start();
if(isset($_SESSION['nome_usuario'])){
    $user= $_SESSION['nome_usuario'];
}
else{
    session_destroy();
    header(header:"location: ../login.php");
    echo "vc foi expulso";
}
?>