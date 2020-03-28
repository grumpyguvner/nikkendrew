<?php
  header( "refresh:10;url=/" );
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "hello" . chr(64) . "nikkendrew.com";
  $email = $_REQUEST['email'];
  $subject = "Contact request sent via nikkendrew.com";
  $comment = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
  	echo "There was a problem sending your message!";
  }
?>
  <p>The site will refresh in a few seconds, alternatively please <a href="/">click here</a></p>
