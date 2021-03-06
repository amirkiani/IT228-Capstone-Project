<?php
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first!';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
// start includes here
include('includes/config.php');
include('includes/header.php');

?>

<?php
// Notification message
if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
    <?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>



<?php
    if(isset($_SESSION['UserName'])) : ?>
    <div class="welcome-logout">
    <h3> Welcome, 
        
    <?php echo $_SESSION['UserName']; ?>
    <br> You are now logged in!
    </h3>
    <p><a href="index.php?logout='1'">Log out!</a></p>
    </div>

    <?php endif ?>

<div id="wrapper">
    <h1 class="<?php echo $center ;    ?>"><?php echo $mainHeadLine;  ?></h1>
    <img class="image" src="images/welcome.png" alt="welcome">

<?php $photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, count($photos)-1);
$selectedImages = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImages.'">';
?>

    <blockquote>
Welcome to Raja Executive Fitness! We will take you to the next level with our passion and knowledge! You made the best decision you ever did regarding fitness!

</blockquote>

  
<?php
include('includes/footer.php');
?>
