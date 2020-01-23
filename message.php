<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

header("Content-Type: application/json; charset=UTF-8");

$ob = json_decode($_POST["x"], false);

//$ob->name= "Haru";
//$ob->email = "tag@yahoo.com";
//$ob->coment= "see and let go";

$obj->result="sent sucessfully.";

$myjson = json_encode($obj);

//Connecting to server

$link = mysqli_connect("localhost", "root", "", "ebizebiz");
 
//$link = mysqli_connect("localhost:3306", "ebizebiz", "Pqd72H0q7h", "ebizebiz_test");

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$sql = "INSERT INTO mymessage (name,email,coment) VALUES('$ob->name', '$ob->email', '$ob->coment')";

if(mysqli_query($link, $sql)){

   echo $myjson;

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//Sending Plain Text Email 

$to = 'alybaba2009@gmail.com';



$subject = 'Message from Sirconcept Web';



$headers  = 'MIME-Version: 1.0' . "\r\n";



$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


function clean_string($string) {

	  $bad = array("content-type","bcc:","to:","cc:");

	  return str_replace($bad,"",$string);

	}	

//Create email headers

    $headers .= "From: ".clean_string($ob->email)." \r\n".

                "Reply-To: ".clean_string($ob->email)."\r\n" .

                'X-Mailer: PHP/' . phpversion();


	$message  = "Message from Sirconcept: \n";

    $message  .= "Email from: " .clean_string($ob->name)."\n";

    $message  .= "Email from: " .clean_string($ob->email)."\n";

	$message  .= "Message: " .clean_string($ob->coment)."\n";

    //sending mail

    $obj->rst="Message sent. Will get back to you soon.";
  
    $json=json_encode($obj);

   $success = @mail($to, $subject, $message, $headers);

    if($success == true){
        
        echo $json;

    }else {

        $err->errr='Error: unable to send the message. Try again later';

        $errjson = json_encode($err);

        echo $errjson;

    }



mysqli_close($link);



?>
