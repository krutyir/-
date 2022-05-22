<?php
$db=mysqli_connect("localhost","krutyie","Ваш_пароль","krutyie_reg1") or die();
$res=mysqli_query($db,"set names utf8");
if (isset($_GET["del"])) {
 $res=mysqli_query($db,"DELETE FROM comment WHERE id='".$_GET["del"]."'");
 header("Location: adminka.php");
}
if (isset($_GET["ok"])) {
 $res=mysqli_query($db,"UPDATE comment SET moderation=1 WHERE id='".$_GET["ok"]."'");
 header("Location: adminka.php");
}
if ($_POST["com"]!='') {
 $res=mysqli_query($db,"UPDATE comment
 SET message='".htmlspecialchars($_POST["com"])."' WHERE id='".$_POST["com_id"]."'");
 header("Location: adminka.php");
}
?>