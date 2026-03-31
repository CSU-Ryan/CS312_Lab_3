<!DOCTYPE html>

<?php // Setup for default page
$direction       = $_GET["direction"] ?? "east";
$other_direction = ($direction == "east") ? "west" : "east";
$page            = $_POST["page"] ?? "home";
?>

<html lang="en">
<?php include "./content/static/head.php"; ?>

<body>
    <?php include "./content/static/header.php"; ?>
    <?php include "./content/static/nav.php"; ?>

    <main>
    <?php include "./content/main/{$page}.php"; ?>
    </main>

    <?php include "./content/static/footer.php"; ?>
</body>
</html>
