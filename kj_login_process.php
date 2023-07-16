<?php

$id = $_POST['id'];
$password = sha1($_POST['password']);

//$conn = mysqli_connect('127.0.0.1','root','111111','chat'); 원래
$conn = mysqli_connect($_SERVER['DB_HOST'],'root','111111','chat');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$name = "SELECT name FROM users where ";


while ($row = mysqli_fetch_array($result)) {

	
	//echo "<script>alert('{$row["id"]},{$row["password"]}');</script>";

  if ($id == $row['id'] && $password == $row['password']) {

?>

      <form id='my_frm' action='kj_end.php' method='POST'>
        <input type='hidden' name='id' value="<?php echo $_POST['id'];?>">
        <input type='hidden' name='name' value="<?php echo $row['name'];?>">
        <input type='hidden' name='password' value="<?php echo $row['password'];?>">
      </form>

      <script>
     //아이디 비번 일치하면 index.php 페이지로 이동 자스코드
          window.onload = function() {
          let frm = document.querySelector('form#my_frm');
          frm.submit();
        }
      </script>

  <?php  } else{
    ?>
        <meta http-equiv="refresh" content="0;URL='kj_login.php?ch=0'">
    <?php
  }

}
?>
