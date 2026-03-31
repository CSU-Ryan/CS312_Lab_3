<?php
function linkTo($direction, $page) {
    $page_name = ucwords($page);
    $form = '
    <form method="post" action="?direction={$direction}">
        <input type="hidden" name="page" value="{$page}">
        <input type="submit" value="{$page_name}">
    </form>
    ';

    return $form;
}
?>

<nav>
    <ul>
        <li> <?php echo linkTo($direction, "home"); ?> </li>
        <li> <?php echo linkTo($direction, "about"); ?> </li>
        <li> <?php echo linkTo($direction, "foods"); ?> </li>
        <li> <?php echo linkTo($other_direction, $page); ?> </li>
    </ul>
</nav>
