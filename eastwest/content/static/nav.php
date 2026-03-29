<?php
function linkTo($direction, $page) {
    return "?direction={$direction}&page={$page}";
}
?>

<nav>
    <ul>
        <li><a href="<?php echo linkTo($direction, "home"); ?>">Home</a></li>
        <li><a href="<?php echo linkTo($direction, "about"); ?>">About</a></li>
        <li><a href="<?php echo linkTo($direction, "foods"); ?>">Foods</a></li>
        <li><a href="<?php echo linkTo($other_direction, $page); ?>">Switch</a></li>
    </ul>
</nav>
