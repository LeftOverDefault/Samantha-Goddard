<?php
    if (isset($_GET["p"])) {
        $current_page = $_GET["p"];
    } else {
        $current_page = "";
    }
?>

<nav class="navbar">
    <div class="nav-item">
        <a href="<?php echo "#"; /* echo "./?p=". $current_page; */ ?>">
            <h1 class="logo">Samantha Goddard</h1>
        </a>
    </div>
    <div class="nav-item">
        <div class="menu">
            <div class="menu-wrapper">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="dropdown-container">
                <ul class="dropdown">
                    <li><a class="<?php if ($current_page == "") {echo "active";} ?>" href="./">Home</a></li>
                    <li><a class="<?php if ($current_page == "whatisrtt") {echo "active";} ?>" href="./?p=whatisrtt">What Is RTT</a></li>
                    <li><a class="<?php if ($current_page == "workingwithme") {echo "active";} ?>" href="./?p=workingwithme">Working With Me</a></li>
                    <li><a class="<?php if ($current_page == "workingwithschools") {echo "active";} ?>" href="./?p=workingwithschools">Working With Schools</a></li>
                    <li><a class="<?php if ($current_page == "audios") {echo "active";} ?>" href="./?p=audios">Audios</a></li>
                    <li><a class="<?php if ($current_page == "contact") {echo "active";} ?>" href="./?p=contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="links-container">
            <ul class="links">
                <li><a class="<?php if ($current_page == "") {echo "active";} ?>" href="./">Home</a></li>
                <li><a class="<?php if ($current_page == "whatisrtt") {echo "active";} ?>" href="./?p=whatisrtt">What Is RTT</a></li>
                <li><a class="<?php if ($current_page == "workingwithme") {echo "active";} ?>" href="./?p=workingwithme">Working With Me</a></li>
                <li><a class="<?php if ($current_page == "workingwithschools") {echo "active";} ?>" href="./?p=workingwithschools">Working With Schools</a></li>
                <li><a class="<?php if ($current_page == "audios") {echo "active";} ?>" href="./?p=audios">Audios</a></li>
                <li><a class="<?php if ($current_page == "contact") {echo "active";} ?>" href="./?p=contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>