<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title ;    ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">


</head>
<body class="<?php echo $body ; ?>">
<header>
<div class="inner-header">
    <img id="logo" src="images/logo.gif" alt="logo">
<nav>
<ul>
<?php echo makeLinks($nav) ; ?>
</ul>

</nav>
</div> <!-- end inner header -->
</header>
