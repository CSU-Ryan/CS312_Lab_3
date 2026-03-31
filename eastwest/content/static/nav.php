<?php
function linkTo($direction, $page) {
    return "?direction={$direction}&page={$page}";
}
?>

<nav>
    <ul>
        <li>
            <form method="post" action="index.php">
                <input type="hidden" name="page" value="home">
                <input type="submit" value="Home">
            </form>
        </li>
        <li>
            <form method="post" action="index.php">
                <input type="hidden" name="page" value="about">
                <input type="submit" value="About">
            </form>
        </li>
        <li>
            <form method="post" action="index.php">
                <input type="hidden" name="page" value="foods">
                <input type="submit" value="Foods">
            </form>
        </li>
        <li><a href="<?php echo linkTo($other_direction, $page); ?>">Switch</a></li>
    </ul>
</nav>
