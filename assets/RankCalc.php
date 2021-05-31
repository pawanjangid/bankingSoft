<?php 

mysql_connect("localhost", "root", "") or die ("Not connected");
mysql_select_db("odin_stmary") or die ("no database");
$query = "SELECT student_id FROM `student`";
$result = mysql_query($query);
$result_array = array();
while($row = mysql_fetch_assoc($result))
{
    $result_array[] = $row['student_id'];
}
foreach ($result_array as $key) {
	$sql1  = "UPDATE enroll SET sum_marks = (SELECT SUM(mark_obtained) FROM `mark` WHERE student_id=$key AND subject_type=1) WHERE student_id=$key";
	mysql_query($sql1);
	echo "$key ranked successfully<br>";
}


$query2 = "SELECT class_id FROM `class`";
$result = mysql_query($query2);
$result_array2 = array();
while($row = mysql_fetch_assoc($result))
{
    $result_array2[] = $row['class_id'];
}
foreach ($result_array2 as $key2) {
$sql2 = "SET @r=0;";
$sql3 = "UPDATE enroll SET rank= @r:= (@r+1) where class_id=$key2 ORDER BY sum_marks DESC;";
mysql_query($sql2);
mysql_query($sql3);
}

echo "<script>window.history.go(-1);</script>";
 ?>