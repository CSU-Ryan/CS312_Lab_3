<?php
function linkTo($direction, $page, $name) {
    return <<<EOT
    <form method="post" action="?direction=$direction" class="nav-button">
        <input type="hidden" name="page" value="$page">
        <input type="submit" value="$name">
    </form>
    EOT;

    return $form;
}
?>

<nav>
    <ul>
        <li> <?php echo linkTo($direction, "home", "Home"); ?> </li>
        <li> <?php echo linkTo($direction, "about", "About"); ?> </li>
        <li> <?php echo linkTo($direction, "foods", "Foods"); ?> </li>
        <li> <?php echo linkTo($other_direction, $page, "Switch"); ?> </li>
    </ul>
</nav>
