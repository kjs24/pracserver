<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>sign up</title>
</head>

<body>
  <h1>sign up</h1>
  <form action="kj_signup_process.php" method="POST">

    <h6>input id</h6>

    <h2><input type='text' name='id' placeholder = "id"></h2>

    <h6> input nickName</h6>

    <h2><input type='text' name = 'name' placeholder = "name"></h2>

    <h6>input password</h6>

    <h2><input type = 'password' name = 'password' placeholder = "password"></h2>
    
    <h5>
     <label><input type="radio" name="salt" value="no" checked> no salt</label>
     <label><input type="radio" name="salt" value="yes"> yes salt</label>
    </h5>

    <input type='submit' value='가입'>
  </form>


</body>

</html>
