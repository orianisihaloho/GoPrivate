
<?php
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$testimoni=$_POST["testimoni"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
 
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($testimoni)){
echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
die("Testimoni harus diisi");}
}
 
//connect database
$con=mysqli_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
//Menampilkan data
$db_select=mysqli_select_db($con,"goprivate");
 
$sql="INSERT INTO testimoni (nama, email, testimoni, art_id, art_url,
date)
VALUES
('$_POST[nama]','$_POST[email]', '$_POST[testimoni]',
'$_POST[art_id]', '$_POST[art_url]', NOW())";
 

$result = mysqli_query( $con,$sql) or die('Could not look up user information; ' . mysqli_error($con));

echo "<meta http-equiv='refresh' content='0; url=$art_url'>";
 
//Memutuskan koneksi
mysqli_close($con);
?>
