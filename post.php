<?

$nameDB = "reg1";
$nameSERVER = "localhost";
$nameUSER = "root";
$passUSER = "root";
$link = mysqli_connect("localhost", "root", "root", "reg1");

$header_title = "Админ панель";
$header_metaD = "Описание страницы";
$header_metaK = "Ключевые слова страницы";

if($_GET['page'])$page = $_GET['page']; else $page = "index";


if($page == "index")
{
include("moduls/menu.php");
$txt = menu();
}


if($page == "add_content")
{
include("moduls/addcontent.php");
$txt = addcontent();
}


include("templates/index.html");
?>
