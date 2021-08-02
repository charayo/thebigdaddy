<?php
include('./config.php');
// include "$_SERVER[DOCUMENT_ROOT]/thebigdaddy/db/config.php";
$access = new Access;
if(isset($_POST['signup'])){
    $access->signup($_POST['username'], $_POST['email'], $_POST['password']);
}
if(isset($_POST['login'])){
    $access->login($_POST['user_access'], $_POST['password']);
}
if(isset($_GET['signOut'])){
    session_destroy();
}



?>