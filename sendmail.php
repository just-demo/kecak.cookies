<?
$vname=$_POST['name'];
$vmail=$_POST['email'];
$vmessage=$_POST['message'];
if($_POST['name']){
	$sendto="angelcookieshouse@yahoo.com";   
	$subject="Message from website";   
	$message="By: $vname\nE-mail: $vmail\n\n$vmessage\n";
	$from="From: $vname<$vmail>"; 
	mail($sendto, $subject, $message, $from);
	echo "&sent=success";
}
?>