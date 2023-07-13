<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$id = $_POST['id'];
$name = $_POST['name'];
$password = hash("sha256", $_POST['password']);
//$conn = mysqli_connect('127.0.0.1','root','111111','chat');
$conn = mysqli_connect($_SERVER['DB_HOST'],'root','111111','chat');
$sql="
  INSERT INTO users (id,name,password)
    VALUES('{$_POST['id']}','{$_POST['name']}','{$password}')
";
mysqli_query($conn,$sql);

?>
  <meta http-equiv="refresh" content="0;URL='kj_login.php?ch'">
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
