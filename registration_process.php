<?php

    $to = "kunhukbi88@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $branch = $_REQUEST['branch'];
    $ma = $_REQUEST['ma'];
    $days = $_REQUEST['days'];
    $time = $_REQUEST['time'];
    $age = $_REQUEST['age'];
    $package = $_REQUEST['package'];
    $sibling = $_REQUEST['sibling'];
    $cmessage = $_REQUEST['note'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Registration AKC Website : {$name}";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Registration : AKC Website</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Phone:</strong> {$phone}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Branch:</strong> {$branch}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Martial Arts:</strong> {$ma}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Days Required:</strong> {$days}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Preferred Time:</strong> {$time}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Age:</strong> {$age}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Package:</strong> {$package}</td></tr>";
  $body .= "<tr><td style='border:none;'><strong>Have Sibling:</strong> {$sibling}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>
