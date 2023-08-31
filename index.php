<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samantha Goddard</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
    <!-- <meta http-equiv="refresh" content="0; url=http://samantha-goddard/?p=home" /> -->
</head>

<body>
    <?php include_once("./pages/navbar.php"); ?>
    
    <?php
        if (isset($_GET["p"])) {
            $current_page = $_GET["p"];
        } else {
            $current_page = "home";
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
            case "home":
                include_once("./pages/home.php");
                break;
            default:
                include_once("./pages/404.php");
                break;
            }
            ?>

    <?php include_once("./pages/footer.php"); ?>

    <script src="./js/script.js"></script>
</body>

</html>