<?php

session_start();
if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/config.php');
include('includes/header.php');

?>

<?php
    if(isset($_SESSION['UserName'])) : ?>
    <div class="welcome-logout">
    <h3> Welcome, 
        
    <?php echo $_SESSION['UserName']; ?>

    </h3>
    
    <a href="index.php?logout='1'">Log out!</a>
    </div>

    <?php endif ?>


<div id="wrapper">
    <h1 class="<?php echo $center ;    ?>"><?php echo $mainHeadLine;  ?></h1>
    
    <h1>Users Table</h1>
    <img class="image" src="images/users.jpg" alt="users">
    <h1>Shows Table</h1>
    <img class="image" src="images/shows.JPG" alt="shows">



    <?php
include('includes/footer.php');
?>
