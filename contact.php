<?php
include('config.php'); 
include('includes/header.php');
?>


<div id="wrapper">

<main>

    <h1><?php echo $mainHeadLine;  ?></h1>
    <?php include('includes/form.php') ; ?>
</main>

<aside>
<h3>Tell us about your favorite shows!!!</h3>
<?php echo randImages1($photos); ?>

<p>
Cras pellentesque nisl vel suscipit sagittis. Curabitur lobortis vestibulum feugiat. Ut nulla purus, volutpat vitae cursus at, eleifend mattis metus. Proin porttitor faucibus convallis. Suspendisse rutrum vel dolor vitae malesuada. Nam hendrerit tempus tortor, at aliquam risus bibendum quis. Aliquam in aliquet leo. Mauris consequat massa placerat tortor varius, a hendrerit sem luctus. Mauris quis ligula ornare, mattis eros luctus, pellentesque lectus.

</p>
</aside>

  
<?php
include('includes/footer.php');
?>
