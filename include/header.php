<?php
if (isset($_GET["p"])) {
	$current_page = $_GET["p"];
} else {
	$current_page = "";
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Samantha Goddard | Rapid Transformational Therapist<?php
switch ($current_page) {
	case "whatisrtt":
		echo " | What Is RTT?";
		break;
	case "audios":
		echo " | Hypnotic Audios";
		break;
	case "workingwithme":
		echo " | Working With Me";
		break;
	case "contact":
		echo " | Contact";
		break;
	default:

		break;
} ?></title>

<?php
	switch ($current_page) {
		case "whatisrtt":
			echo "<meta name='description' content='What Is RTT, Rapid Transformational Therapy, Hypnosis, Fast Acting, Immediate,  Immediate transformational therapy'>";
			echo "<link rel='canonical' href='https://samantha-goddard.com/whatisrtt'>";
			break;
		case "workingwithme":
			echo "<meta name='description' content='Relaxing Environment, Online, Face to Face'>";
			echo "<link rel='canonical' href='https://samantha-goddard.com/workingwithme'>";
			break;
		case "hypnoticaudios":
			echo "<meta name='description' content='Weight loss hypnotic audio, hypnotic audio for weight loss, hypnotic audio for sleep, hypnotherapy for insomnia, hypnotic audio for anxiety'>";
			echo "<link rel='canonical' href='https://samantha-goddard.com/hypnoticaudios'>";
			break;
		case "contact":
			echo "<meta name='description' content='Contact me'>";
			echo "<link rel='canonical' href='https://samantha-goddard.com/contact'>";
			break;
		case "":
			echo "<link rel='canonical' href='https://samantha-goddard.com/'>";
			break;
		default:
			echo "<meta name='description' content='Hypnotherapy near me, RTT Therapy, RTT near me, Hypnotherapist, Therapist, Weight loss, Emotional eating issues, Anxiety, Panic attacks, Self sabotage, Limiting beliefs, Low self esteem, Depression, Public speaking, Confidence, Insomnia, Sleep issues'>";
			break;
	}
?>

<meta property="og:locale" content="en_GB"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Rapid Transformational Therapy with Samantha Goddard, Hypnotherapy, Sevenoaks, Tunbridge Wells, Tonbridge, Kent, Online"/>
<meta property="og:description" content="Hypnotherapy near me, RTT Therapy, RTT near me, Hypnotherapist, Therapist, Weight loss, Emotional eating issues, Anxiety, Panic attacks, Self sabotage, Limiting beliefs, Low self esteem, Depression, Public speaking, Confidence, Insomnia, Sleep issues"/>
<meta property="og:url" content="https://www.samantha-goddard.com/"/>
<meta property="og:site_name" content="Samantha Goddard | Rapid Transformational Therapy"/>
<meta property="article:modified_time" content="2023-07-01T08:45:38+00:00"/>
<meta property="og:image" content="https://www.samantha-goddard.com/img/main-banner.jpg"/>
<meta property="og:image:width" content="1920"/>
<meta property="og:image:height" content="974"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta name="twitter:card" content="summary_large_image"/>

<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
<link rel="icon" type="image/x-icon" href="./img/favicon.ico">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/media.css">