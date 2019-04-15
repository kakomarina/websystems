<?php
include('template.php');
if (isset($_POST)) {
	$name = htmlspecialchars($_POST["name"]); 
	$msg = htmlspecialchars($_POST["msg"]); 
 $content = <<<END
<h3>Message was sent:</h3>
 Name: {$name}
 <br>
 Message: {$msg}
END;
 $to = "marsle19@student.hh.se";
 $subject = "Test-mail";
 $msg = $_POST["msg"];
 $headers = "From: " . $_POST["name"];
 mail($to, $subject, $msg, $headers);
}
echo $navigation;
echo $content;
?>