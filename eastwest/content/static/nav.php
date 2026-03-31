<?php
function linkTo($direction) {
    return "?direction={$direction}";
}
?>

<nav>
    <ul>
        <li>
            <form method="post" action="?direction=<?php echo $direction; ?>">
                <input type="hidden" name="page" value="home">
                <input type="submit" value="Home">
            </form>
        </li>
        <li>
            <form method="post" action="?direction=<?php echo $direction; ?>">
                <input type="hidden" name="page" value="about">
                <input type="submit" value="About">
            </form>
        </li>
        <li>
            <form method="post" action="?direction=<?php echo $direction; ?>">
                <input type="hidden" name="page" value="foods">
                <input type="submit" value="Foods">
            </form>
        </li>
        <li><a href="direction=<?php echo $direction; ?>">Switch</a></li>
    </ul>
</nav>
