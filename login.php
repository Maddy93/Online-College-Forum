<?php
session_start();
include('connection.php');
$roll=$_POST['roll'];
$pass=md5($_POST['pass']);
//echo $pass;
$sql=mysql_query("SELECT * FROM users WHERE roll=".$roll." AND password=\"".$pass."\"");
if(mysql_num_rows($sql)==0)
    echo 'Enter Valid details';
else
{
    $row=mysql_fetch_array($sql);
    $_SESSION['name']=$row['name'];
    $_SESSION['roll']=$row['roll'];
    $_SESSION['id']=$row['id'];
    $_SESSION['permissions']=$row['permissions'];
    echo 'Login Successful';
}
?>
<?php
	mysql_close($con);
?>
