<html>
<head>
	
	</head>
	<body>
		<form method="POST" name="contactform" action="contact-form-handler.php">
    <p>
        <label for='name'>Your Name:</label>
        <br>
        <input type="text" name="name">
    </p>
    <p>
        <label for='email'>Email Address:</label>
        <br>
        <input type="text" name="email">
        <br>
    </p>
    <p>
        <label for='message'>Message:</label>
        <br>
        <textarea name="message"></textarea>
    </p>
    <input type="submit" value="Submit">
    <br>
</form>
<?PHP
$email = $_POST["emailaddress"];
$to = "karolinpayp@protonmail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: you@youremailaddress.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>
		
	</body>

		
</html>
