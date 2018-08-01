<?php
    session_start();
    if (!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false)
    {
        header("Location: Login.php");
    }
?>

<h2> You are in</h2>