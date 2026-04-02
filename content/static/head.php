<?php // Variables for different head info
$title = [
    "home"  => "Ryan Grimm - Homepage",
    "about" => "Ryan Grimm - About",
    "foods" => "Ryan Grimm - Favorite Foods"
];
$description = [
    "home"  => "Ryan Grimm homepage",
    "about" => "About Me page for Ryan Grimm",
    "foods" => "Ryan Grimm's favorite foods"
];
$keywords = [
    "home"  => "ryan grimm, CSU, computer science",
    "about" => "ryan grimm, CSU, computer science, about",
    "foods" => "ryan grimm, CSU, computer science, favorite food"
];
?>

<head>
    <meta charset="UTF-8">
    <title><?php echo $title[$page]; ?></title>
    <meta name="author" content="Ryan Grimm">
    <meta name="description" content="<?php echo $description[$page]; ?>">
    <meta name="keywords" content="<?php echo $keywords[$page]; ?>">
    <link rel="stylesheet" type="text/css" href="./<?php echo $direction; ?>.css">
</head>
