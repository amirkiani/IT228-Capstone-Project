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


// WE ARE CONNECTING TO THE DATABASE!

    if(isset($_SESSION['UserName'])) : ?>
    <div class="welcome-logout">
    <h3> Welcome, 
        
    <?php echo $_SESSION['UserName']; ?>

    </h3>
    
    <a href="index.php?logout='1'">Log out!</a>
    </div>

    <?php endif ?>

<?php if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];

} else {
    header('location:shows.php');
}
?> 
<div id="wrapper">
    <main>
    <h1>More Info on the Show</h1>  
<?php
$sql = 'SELECT * FROM Shows WHERE ShowID = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extract the data here

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__, mysqli_error($iConn)));

// do we have more than 0 rows //

if(mysqli_num_rows($result) > 0 ) { // show the records
    while($row = mysqli_fetch_assoc($result)) {
    // this array will display the contents of your row
    echo '<ul>'; // use a similar a href's value as we used for switch assignment
    echo '<li class="bold"><h2>'.$row['ShowName'].'</h2></li>';
    echo '<li>'.$row['ReleaseDate'].'</li>';
    echo '<li>'.$row['StreamingService'].'</li>';
    echo '<li>'.$row['Description'].'</li>';
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';

        echo '</ul>';
    } // closing the while loop

} else { // what if there are no people

    echo 'There is no game matching this ID';

}

 // close the else

// release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
?>
</main>



<?php
include('includes/footer.php');
