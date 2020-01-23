<?php

$s=strtotime("today");

$e=strtotime("+10days",$s);

$i=0;

do{


$subjects=array("Thank You","Download Free Book","Investment In Knowledge");

   
$messages=array("Thank you for subscribing. We will get back to you soon","Hi,dear here is the link to download your free book click here","Knowledge and success are twins. Success depends on knowledge. Never hesitate to investing in knowledge of which return is doubled");
   

 //sending plain text mail
 
  $subject="$subjects[$i]";

  $message="$messages[$i]";

//Capturing data from html form
$to=$_POST['email'];

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .="$From:".$_POST['email'] ."r\n".
"Reply-To:".$_POST['email']."r\n".
'X-Mailer: PHP/'.phpversion();
  if(mail($_POST['email'], $subject, $message, $headers)){
      
      echo "Thank you for subscribing ";
      echo '
<html lang="en">
<head>
<meta charset="utf-8">
<title>Thank You</title>
<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://www.ebizebiz.com/thank-you/");
    }      
    setTimeout("pageRedirect()", 10000);
</script>
</head>
<body>
    <p><strong>Note:</strong> You will be redirected to the ebizebiz.com in 10 sec.</p>
</body>
</html>  ';
        
      }
     else {  echo "Unable to send mail. Please try again.";   }

$s=strtotime("+1day, $s");
}while($s<$e && sleep(86400));
$i++;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
<meta charset="utf-8">
<title>Thank You</title>
<script type="text/javascript">
    function pageRedirect() {
        window.location.replace("http://www.ebizebiz.com/thank-you/");
    }      
    setTimeout("pageRedirect()", 10000);
</script>
</head>
<body>
    <p><strong>Note:</strong> You will be redirected to the ebizebiz.com in 10 sec.</p>
</body>
</html>                                		