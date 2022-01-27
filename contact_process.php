<?php

    $to = "info@audax-parketi.hr";
	// $to = "ljubicicleona@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['firstname'];
    $csubject = $_POST['subject'];
    $cmessage = $_POST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers2 .="From: " . $to . "\r\n";
	$headers2 .="CC: " . $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Imate novu poruku.";
	$subject2 = "Audax parketi d.o.o. - Vaša poruka je uspješno poslana.";

    $logo = 'foto/Screenshot_10.jpg';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>\r\n";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>\r\n";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>\r\n";
	$body .= "<tr><td></td></tr>\r\n";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>\r\n";
	$body .= "</tbody></table>\r\n";
	$body .= "</body></html>\r\n";

	$body2 .= "Poštovani, zahvaljujemo na Vašem povjerenju. Odgovorit ćemo na Vašu poruku u najkraćem mogućem roku. Srdačan pozdrav.\r\n";
	$body2 .= "{$cmessage}\r\n";

    $send = mail($to, $subject, $body, $headers);
	$send2 = mail($from, $subject2, $body2, $headers2);

	header("Location: https://audax-parketi.hr/thankyou.html");
	exit();


?>

