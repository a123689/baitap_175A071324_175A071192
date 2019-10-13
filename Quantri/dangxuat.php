<?php
session_start();
unset($_SESSION["iduser"]);
unset($_SESSION["taikhoan"]);
unset($_SESSION["matkhau"]);
unset($_SESSION["hoten"]);
echo $_POST["dangxuat"];
?>
