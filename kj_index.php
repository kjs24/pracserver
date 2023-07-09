<!DOCTYPE html>
<?php
ini_set('display_errors','0');
?>
<head>
  <meta charset="utf-8">
  <title>CHATTING</title>
</head>

<body>
<?php
$id=$_POST['id'];
$name=$_POST['name'];

echo $name;

 ?>
 <a href="login2.php?ch=">돌아가기</a>
  <div>
    <form method="POST" id="input">
      <input type="text" , name="chats" , placeholder="내용">
      <input type='hidden' name='id' value="<?php echo $_POST['id'];?>">
      <input type='hidden' name='name' value="<?php echo $_POST['name'];?>">
      <input id="sub" type="submit" , value="입력">
    </form>
  </div>

  <?php

  $conn = mysqli_connect('127.0.0.1','root','111111','chat');

  $chat = $_POST['chats'];
//  echo $chat;




  $sql = "SELECT description FROM chatrecord";



  $input_code = "
  INSERT INTO chatrecord (id,name,description)
    VALUES('{$_POST['id']}','{$_POST['name']}','{$_POST['chats']}')
  ";

//  $output_code = "SELECT * FROM chatrecord WHERE ORDER BY";
  $output_code = "SELECT * FROM chatrecord ";


  $input = mysqli_query($conn, $input_code);

  $output = mysqli_query($conn, $output_code);


  $row = mysqli_fetch_array($output);

  while ($row = mysqli_fetch_array($output)) {

    echo $row["name"] . ':' . $row["description"] . '<br />';
  }

  mysqli_close($conn);
  ?>


</body>

</html>
