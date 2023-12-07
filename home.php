<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" tyle="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="stylebuttons">
        <a class="view" href="details.php"> VIEW DETAILS </a>
        <a class="logout" href="logout.php"> LOGOUT </a>
        <a class="dummy" href="todo.html"> TO-DO </a>
    </div>
    <div class="container">
        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
    </div>
</body>

</html>