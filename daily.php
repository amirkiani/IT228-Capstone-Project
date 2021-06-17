<?php
// people.php
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
    if(isset($_SESSION['UserName'])) : ?>
    <div class="welcome-logout">
    <h3> Welcome, 
        
    <?php echo $_SESSION['UserName']; ?>

    </h3>
    
    <a href="index.php?logout='1'">Log out!</a>
    </div>

    <?php endif ?>

    <?php





?>

<div id="wrapper">
<main>
<h1>Streamer of the Day</h1>

<p><?php echo $content; ?></p>
<img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    </main>

<aside>
    <h1>Other Streamers of the Day</h1>
        
<ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>

</ul>
</aside>

<?php
include('includes/footer.php');
?>

<input type="radio" name="privacy" value="true" <?php if(isset($_POST['privacy'])) echo 'checked="checked"';          ?>>
I agree to your Privacy Policy
<span><?php echo $privacyError; ?></span>
<input type="submit" value="Send it!">
<p><a href="">Reset me!</a></p>
</fieldset>
</form>
</main>

<aside>
<h3>Tell us about your favorite shows!</h3>
<?php echo randImages1($photos); ?>

<p>
Cras pellentesque nisl vel suscipit sagittis. Curabitur lobortis vestibulum feugiat. Ut nulla purus, volutpat vitae cursus at, eleifend mattis metus. Proin porttitor faucibus convallis. Suspendisse rutrum vel dolor vitae malesuada. Nam hendrerit tempus tortor, at aliquam risus bibendum quis. Aliquam in aliquet leo. Mauris consequat massa placerat tortor varius, a hendrerit sem luctus. Mauris quis ligula ornare, mattis eros luctus, pellentesque lectus.

</p>
</aside>

  
<?php
include('includes/footer.php');
?>
