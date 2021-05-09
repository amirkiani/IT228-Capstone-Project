<?php include "includes/header.php"?>
<?php
        

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ameerkiani@icloud.com";  //place your/your client's email address here
        $toName = "Hamza Kiani"; //place your client's name here
        $website = "ameercodes.com/web120";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
<?php include "includes/footer.php"?>