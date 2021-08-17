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
    <div id="wrapper">
    <main>
    <h1>Click on the Shows for More Information</h1>   
    <?php
$sql = 'SELECT * FROM Shows';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extract the data here

$result = mysqli_query($iConn, $sql) or die(myerror(__FILE__,__LINE__, mysqli_error($iConn)));

// do we have more than 0 rows //

if(mysqli_num_rows($result) > 0 ) { // show the records
    while($row = mysqli_fetch_assoc($result)) {
    // this array will display the contents of your row
    echo '<ul>'; // use a similar a href's value as we used for switch assignment
    echo '<li class="bold">For more information <a href="shows-view.php?id='.$row['ShowID'].' ">'.$row['ShowName'].' </a></li>';
    echo '<li>'.$row['ReleaseDate'].'</li>';
    echo '<li>'.$row['StreamingService'].'</li>';
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"/>';

        echo '</ul>';
    } // closing the while loop

} else { // what if there are no people

    echo 'Nobody home!';

}

 // close the else

// release the web server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
?>


        </main>
    <aside>
    <h1>Streaming Services</h1>
        <p>To the left are the top 5 shows according to our staff critics. For more information on each streaming service, click on their logo for more information.</p>
        <a href="http://www.netflix.com">
  <img src="images/netflix.png" alt="netflix" height="128" width="128" />
</a> 
<a href="http://www.hulu.com">
  <img src="images/hulu.png" alt="hulu" height="128" width="128" />
</a> 
<a href="http://www.disneyplus.com">
  <img src="images/disney.png" alt="disney" height="128" width="128" />
</a> 



    </aside>


<?php
include('includes/footer.php');
