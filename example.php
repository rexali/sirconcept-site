<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP print Statement</title>
</head>
<body>
<form action='example.php' method='post'>
<input type='submit' name='submit' value='Send'/>
</form>
<?php

// Defining variables

if (isset($_POST['submit'])) {

    $txt = "Hello World!";
    $num = 123456789;
    $colors = array("Red", "Green", "Blue");
     
    // Displaying variables
    print '<p align="center">'.$txt.'</P>';
    print "<br>";
    print $num;
    print "<br>";
    print $colors[0];
}

?>

</body>
</html>                                		