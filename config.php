<?php

// config for credentials.php

ob_start(); // prevents header errors before reading the whole page
define('DEBUG', 'TRUE'); // we want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'login.php' :
$body = 'login';
$mainHeadline = 'Welcome back! Please log in';
$center = 'login';
$title = 'Best TV Shows of 2020 Login Page!';
break;

case 'register.php' :
$body = 'register';
$mainHeadline = 'Complete your registration';
$center = 'register';
$title = 'Register Page';
break;

case 'index.php' :
$body = 'home';
$mainHeadline = 'Welcome to the Best TV Shows of 2020!';
$center = 'center';
$title = 'Best TV Shows of 2020 Home Page';
break;


case 'about.php' :
$body = 'about';
$mainHeadline = 'Here are the MySQL tables';
$center = 'center';
$title = 'About Page';
break;

case 'daily.php' :
$body = 'daily';
$mainHeadline = 'Here is the TV Show of the Day';
$center = 'center';
$title = 'Daily Page';
break;

case 'shows.php' :
$body = 'shows';
$mainHeadline = 'Here are the top TV shows for 2020!';
$center = 'center';
$title = 'Top TV Shows';
break;

// case 'contact.php' :
// $body = 'contact';
// $mainHeadline = 'Please contact us and provide us feedback';
// $center = 'center'
// $title = 'Contact page';
// break;

}

// Our nav
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['shows.php'] = 'Shows';
$nav['contact.php'] = 'Contact';

function makeLinks($nav) {
        $myReturn = '';
        foreach($nav as $key => $value) {
                if(THIS_PAGE == $key) {
                        $myReturn .= '<li><a href=" '.$key.' " class="active"> '.$value.' </a></li>';

                
                } else {
                        $myReturn .= '<li><a href=" '.$key.' "> '.$value.' </a></li>'; 
                }
        }
        return $myReturn;
}

// daily switch
date_default_timezone_set('America/Los_Angeles'); 
$today=''; 


if(isset($_GET['month'])){ 
    $season=$_GET['month'];
}else { 
    $season=date('m'); 
}




//PLEASE REMEMBER -THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
function myerror($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo"Error in file: <b>".$myFile."</b> on line: <b>".$myLine."</b><br />";
echo"Error Message: <b>".$errorMsg."</b><br />";
die();
}else{
        echo "I'm sorry, we have encountered an error. ";
        die();
}
}
