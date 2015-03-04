<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telephone']) 		||
   empty($_POST['nb-factures-achat'])	||
   empty($_POST['nb-factures-vente'])  ||
   empty($_POST['nb-salaries'])  ||
   empty($_POST['val-min'])  ||
   empty($_POST['val-max'])  ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$factures_achat=$_POST['nb-factures-achat'];
$factures_vente=$_POST['nb-factures-vente'];
$salaries=$_POST['nb-salaries'];
$valmin=$_POST['val-min'];
$valmax=$_POST['val-max'];

$message = echo "Pour".$factures_achat."factures d'achat et ".$factures_vente." factures de ventes par mois, ainsi que 
                     ".$salaries." salarié(s) votre coût mensuel est compris entre". $valmin."€ et ".$valmax."€ .</p>";
                     
	
// Create the email and send the message
$to = 'msilvagu@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: msilvagu@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>