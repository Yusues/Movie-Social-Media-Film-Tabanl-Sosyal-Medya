<?php 
session_start();
$hostadresi        =    "localhost";
$kullaniciadi      =    "root";
$sifre             =    "";
$veritabani        =    "film";

$db = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
    echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
?>