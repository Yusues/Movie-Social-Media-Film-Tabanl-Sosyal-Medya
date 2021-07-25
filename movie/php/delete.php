<?php
include ("baglanti.php");
 
$ID = $_GET["id"];
$delete = mysqli_query($db,"delete from elestiri where id='$ID'");
 
if ($delete)
{
    header('Location: chat.php');
}
else
{
    echo "Hata, Silinemedi.";
}
?>