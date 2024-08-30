<?php

require "Profile.php";

$profile = new Profile(
    "Dela Cruz",
    "Juan",
    "Dipasisiil"
);

$profile->setEmail('juan@delacruz.ph');
$profile->setAddress('Barangay Mintal, Davao City, Philippines 8000');

// Set the favorite quote
$profile->setFavoriteQuote('The only limit to our realization of tomorrow is our doubts of today.');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
</head>
<body>
    <h1><?php echo $profile->getCompleteName(); ?></h1>
    <h2><?php echo $profile->getEmail();?></h2>
    <h2><?php echo $profile->getAddress();?></h2>
    <p>
        <?php echo $profile->getFavoriteQuote(); ?>
    </p>
</body>
</html>