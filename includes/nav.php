<?php
// Here, b a d  d e s i g n.
$anchors = false;
$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, 'index') !== false) {
    $anchors = true;
}
?>

<nav id="nav">
    <div class="sm-nav-toggler">
        <span class="lnr lnr-menu"></span>
        <span class="lnr lnr-cross"></span>
    </div>
    <ul class="main-menu">
        <li>
            <a href="index.php">
                <span class="lnr lnr-home"></span>
                <span class="nav-text">home</span>
            </a>
        </li>
        <li>
            <a class="scrolling" href="<?php echo $anchors ? '#about': 'index.php'; ?>">
                <span class="lnr lnr-user"></span>
                <span class="nav-text">About</span>
            </a>
        </li>
        <li>
            <a class="scrolling" href="<?php echo $anchors ? '#education': 'index.php'; ?>">
                <span class="lnr lnr-license"></span>
                <span class="nav-text">resume</span>
            </a>
        </li>
        <!-- <li>
            <a href="services.php">
                <span class="lnr lnr-cog"></span>
                <span class="nav-text">services</span>
            </a>
        </li>-->
        <!--<li>
            <a href="portfolio.php">
                <span class="lnr lnr-briefcase"></span>
                <span class="nav-text">portfolio</span>
            </a>
        </li>-->
        <li>
            <a href="contact.php">
                <span class="lnr lnr-phone-handset"></span>
                <span class="nav-text">Contact</span>
            </a>
        </li>
    </ul>
    <div class="menu-bg"></div>
</nav>