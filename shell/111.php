

<?php 
 //юзаем этот файл только ради сохранения переменной $id в сессии

session_start();

$_SESSION['id'] = $_GET["idtr"];


?>