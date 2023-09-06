<?php
	if (isset($_GET["p"])) {
		$current_page = $_GET["p"];
	} else {
		$current_page = "";
	}

	switch ($current_page) {
		case "whatisrtt":
			echo "<meta name='description' content='What Is RTT, Rapid Transformational Therapy, Hypnosis, Fast Acting, Immediate,  Immediate transformational therapy'>";
			break;
		case "workingwithme":
			echo "<meta name='description' content='Relaxing Environment, Online, Face to Face'>";
			break;
		case "hypnoticaudios":
			echo "<meta name='description' content='Weight loss hypnotic audio, hypnotic audio for weight loss, hypnotic audio for sleep, hypnotherapy for insomnia, hypnotic audio for anxiety'>";
			break;
		case "contact":
			echo "<meta name='description' content='Contact me'>";
			break;
		case "":
			echo "<link rel='canonical' href='https://samantha-goddard.com/'>";
			break;
		default:
			echo "<meta name='description' content='Hypnotherapy near me, RTT Therapy, RTT near me, Hypnotherapist, Therapist, Weight loss, Emotional eating issues, Anxiety, Panic attacks, Self sabotage, Limiting beliefs, Low self esteem, Depression, Public speaking, Confidence, Insomnia, Sleep issues'>";
			break;
	}
?>