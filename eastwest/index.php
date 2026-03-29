<!DOCTYPE html>

<?php
// Setup for default page
$direction = $_GET["direction"] ?? "east";
$other_direction = ($direction == "east") ? "west" : "east";
$page = $_POST["page"] ?? "index";
?>

<html lang="en">
<?php include "./content/head.php"; ?>

<body>

    <?php include "./content/header.php"; ?>

    <?php include "./content/nav.php"; ?>

</body>
</html>
