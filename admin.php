<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <a href="index.php" id="back_home">Back to Home</a>
    <div class="admin_form--wrapper">
        <form action="admin/login_check.php" method="post">
            <input type="text" name="username" placeholder="username"required>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" value="Log in" name='submit'>
         </form>
         <?php
        if(isset($_GET['error'])){
            if(isset($_GET) == 'wronglogin')
              echo "<p>Niste uneli ispravnu šifru ili username</p>";
        }
        if(isset($_SESSION['user_id']))
            header("Location: panel.php")
    ?>
    </div>
   
</body>
</html>