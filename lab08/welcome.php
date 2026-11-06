<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    include 'header.inc';
    session_start();
    if(isset($_SESSION['user'])){
        echo"Welcome " .$_SESSION['user'];
    }
    else{
        header('Location: login.php');
    }
    include 'footer.inc';
    ?>
</body>
</html>