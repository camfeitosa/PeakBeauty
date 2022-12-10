<?php
if(!isset($_SESSION)) {
    session_start();
}

echo "";

if(!isset($_SESSION['id_cliente'])) {
    echo "<a href='../index.html'>Faça login</a>";
    //header("Location: ../index.html");
}else{
    echo $_SESSION['email_cliente'];
}
?>