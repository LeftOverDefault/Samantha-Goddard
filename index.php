<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samantha Goddard</title>
    <?php include_once('./pages/header.php'); ?>

    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Rapid Transformational Therapy with Samantha Goddard, Hypnotherapy, Sevenoaks, Tunbridge Wells, Tonbridge, Kent, Online" />
    <meta property="og:description" content="Hypnotherapy near me, RTT Therapy, RTT near me, Hypnotherapist, Therapist, Weight loss, Emotional eating issues, Anxiety, Panic attacks, Self sabotage, Limiting beliefs, Low self esteem, Depression, Public speaking, Confidence, Insomnia, Sleep issues" />
    <meta property="og:url" content="https://www.samantha-goddard.com/" />
    <meta property="og:site_name" content="Samantha Goddard | Rapid Transformational Therapy" />
    <meta property="article:modified_time" content="2023-07-01T08:45:38+00:00" />
    <meta property="og:image" content="https://www.samantha-goddard.com/img/main-banner.jpg" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="974" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once("./pages/navbar.php"); ?>
    
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

    <?php include_once("./pages/footer.php"); ?>

    <script src="./js/script.js"></script>
</body>

</html>