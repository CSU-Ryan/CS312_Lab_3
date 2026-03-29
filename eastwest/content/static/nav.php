<?php
function toPage($toPage) {
    return "index.php?direction={$direction}&page={$toPage}";
}

function swap() {
    return "index.php?direction={$other_direction}&page={$page}";
}
?>

<nav>
    <ul>
        <li><a href="<?php echo toPage("home"); ?>">Home</a></li>
        <li><a href="<?php echo toPage("about"); ?>">About</a></li>
        <li><a href="<?php echo toPage("foods"); ?>">Foods</a></li>
        <li><a href="<?php echo swap(); ?>">Switch</a></li>
    </ul>
</nav>
