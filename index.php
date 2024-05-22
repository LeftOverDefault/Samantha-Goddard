<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src=https://www.googletagmanager.com/gtag/js?id=G-NH9FRBPS7N></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-NH9FRBPS7N');
    </script>
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
            case "workingwithschools":
                include_once("./pages/workingwithschools.php");
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