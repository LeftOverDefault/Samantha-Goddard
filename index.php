<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("./include/header.php"); ?>
</head>
<body onLoad="window.scroll(0, 0)">

    <?php include_once("./include/navbar.php"); ?>

    <?php
        if (isset($_GET["p"])) {
            $current_page = $_GET["p"];
        } else {
            $current_page = "";
        }

        switch ($current_page) {
            case "workingwithme":
                include_once("./pages/workingwithme.php");
                break;
            case "audios":
                include_once("./pages/audios.php");
                break;
            case "contact":
                include_once("./pages/contact.php");
                break;
            case "whatisrtt":
                include_once("./pages/whatisrtt.php");
                break;
            default:
                include_once("./pages/home.php");
                break;
        }
    ?>

    <?php include_once("./include/footer.php"); ?>

    <script src="./js/script.js"></script>
</body>
</html>