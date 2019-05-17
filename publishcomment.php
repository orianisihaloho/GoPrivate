
<?php
$con=mysqli_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
$db_select=mysqli_select_db($con,"goprivate");
?>
 
<?php
function gettestimoni($art_id){
	$con=mysqli_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
$db_select=mysqli_select_db($con,"goprivate");
$commentquery = mysqli_query($con,"SELECT * FROM testimoni WHERE art_id='$art_id'
ORDER BY id_tes DESC") or die(mysqli_error($con));

$commentNum = mysqli_num_rows($commentquery);
echo "<h4>" . "Testimoni" . "</h4>";
echo "<b>" . $commentNum . " testimoni(s) so far. Leave a testimoni..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
 
while($row = mysqli_fetch_array($commentquery))
 {
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['date'] . "</i>" . "<br />" . "<br />" . $row['testimoni'] . "<br />";
 echo "<hr>";
 }
}
?>
