<head>
<?php include "data.php" ?>
<?php include "functioner.php" ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>
<?php
echo SITE_NAME;

if (isset($pageTitle)){
    echo " - ".$pageTitle;
}
?>
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
<?php echo "<h1 id='konstant'> ".namn." </h1>"; ?><br>
    <a href="index.php">Hem</a>
    <a href="listan.php">lista</a>
    <a href="kontakt.php">kontakt</a>
</header>


