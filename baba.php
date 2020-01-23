<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost:3306", "ebizebiz", "Pqd72H0q7h", "ebizebiz_wp292");

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}



// Attempt create database query execution

/*******************

$sql = "CREATE DATABASE ebizebiz";

if(mysqli_query($link, $sql)){

    echo "Database created successfully";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 ****************/



// Attempt create table query execution

/****************
$sql = "CREATE TABLE ebizebizlist(

    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

    email VARCHAR(70) NOT NULL UNIQUE

)";

if(mysqli_query($link, $sql)){

    echo "Table created successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
*****************/

// Escape user inputs for security

//$email = mysqli_real_escape_string($link, $_REQUEST['email']);

 

// attempt insert query execution

//$sql = "INSERT INTO ebizebizlist (id, email) VALUES ( ' ', '$email')";


/***********

if(mysqli_query($link, $sql)){

    echo "Records added successfully.<br>";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
*****************/

/**************************
//Sending Plain Text Email 

$to = 'support@babait.info';

$subject = 'New Sign Up';

$message = '$email'; 

$from = '$email';

 

// Sending email

if(mail($to, $subject, $message)){

    echo 'Your mail has been sent successfully.';

} else{

    echo 'Unable to send email. Please try again.';

}
*********************************/

/*********************************
mail( 
// E-Mail address 
"example@domain.tld", 
// Subject 
"subject",
 // Message 
"message", 
// Additional Headers 
"From: <hello@programminghub.io >\r\n Reply-to: <world@programming.io>" );

**********************************/



//Sending Formatted Email 
$email="alybababello@yahoo.com";

$to = 'alybaba2009@gmail.com';

$subject = 'EbizEbiz New Sign Up';


// To send HTML mail, the Content-type header must be set

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 
function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}

//Create email headers

$headers .= "From: ".clean_string($email)." \r\n".

    "Reply-To: ".clean_string($email)."\r\n" .

    'X-Mailer: PHP/' . phpversion();

 

//Compose a simple HTML email message

$message = '<html><body>';

$message .= '<h1 style="color:#f40;">Hi, Here\'s is  the new subscriber detail:<br></h1>';

$message .= '<p style="color:#080;font-size:18px;">Get the detail from MyPHPAdmin via www.ebizebiz.com/cpanel<br> Add the email address below to your mailing list </p>';
	
$message.="Email from : ".clean_string($email)."\n";

$message .= '</body></html>';

 

// Sending email

@mail($to, $subject, $message, $headers);
 

// close connection
mysqli_close($link);
?>


<html>
<body>
<p style="text-align: center;"><span style="color: #3366ff;"><strong>Thank you for subscribing to our free book</strong></span></p>
<p style="text-align: left;">A link to download your book has been sent to your email inbox, open and and click the received link to download your book.</p>
<p style="text-align: left;"><strong>Lesson 1: </strong></p>
<p style="text-align: left;">Life is full of lessons to learn to get better everyday.</p>
<p style="text-align: left;">Making money online needs time, dedication, patient and little or no money to invest in knowledge.</p>
<p style="text-align: left;">Knowledge is light. When you invest in it, it makes you to see what others are not seeing.</p>
<p style="text-align: left;">This makes you to be ahead of others. Learn from cradle to grave and never stop learning.</p>
<p style="text-align: left;"><strong>Lesson 2:</strong> <a href="http://c.jumia.io/?a=18383&amp;c=11&amp;p=r&amp;E=kkYNyk2M4sk%3d&amp;ckmrdr=https%3A%2F%2Fwww.jumia.com.ng%2Fjumia-books-trump-university-marketing-101-how-to-use-the-most-powerful-ideas-in-marketing-to-get-more-customers-5588093.html&amp;utm_source=cake&amp;utm_medium=affiliation&amp;utm_campaign=18383&amp;utm_term=">CLICK HERE</a></p>
<p style="text-align: left;"></p>



</body>

</html>