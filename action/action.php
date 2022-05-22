<?php
    require '../connect/connect.php';
    session_start();
 ///   if(isset($_POST['signup'])){
 //       if ($_POST['pass'] == $_POST['pass_check']){
  //      if (preg_match("/@/", $_POST['login']))
        
       // }
//    }
    if(isset($_POST['signup'])){
        $pass = md5($_POST['pass'] . 'jsadfg');
        mysqli_query($link, "INSERT INTO `users` (`email`, `login`,`password`) VALUES ('{$_POST['email']}','{$_POST['login']}', '$pass')");
        header("location: /index.php");
    }
    if(isset($_POST['signin'])){
        $pass = md5($_POST['pass'] . 'jsadfg');
        $users = mysqli_query($link, "SELECT * FROM `users` WHERE (login='{$_POST['login']}'OR email='{$_POST['login']}') AND password='$pass'");
        $user = mysqli_fetch_assoc($users);
        if(mysqli_num_rows($users)>=1){
            
            $_SESSION['user'] = [
                "id" => $user['id'],
                "login" => $user['login']
            ];
        }
        header("location: /index.php");
    }
    if(isset($_GET['logout'])){
        session_unset();
        header("location: /index.php");
    }
    require '../connect/close-connect.php';
?>