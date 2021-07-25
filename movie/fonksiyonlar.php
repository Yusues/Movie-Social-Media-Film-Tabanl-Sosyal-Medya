<?php
function kullaniciAdSoyad($gelen)
{
	$kullanici=mysqli_query($GLOBALS['db'],"SELECT *FROM kullanici WHERE id='$gelen'");
	$cikti = $kullanici->fetch_array();
	$ad = $cikti["ad"];
	$soyad = $cikti["soyad"];
	echo $ad ." " . $soyad;
}
?>