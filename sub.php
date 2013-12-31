<?php

if(isset($_REQUEST['first_name'])) {

    $email_to = "salvatorigabriele@gmail.com";
    $email_subject = "Nuovo iscritto alla newsletter";


    function died($error) {

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_REQUEST['first_name']) {
        
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

    $first_name = $_REQUEST['first_name']; // required
 

    $error_message = "";
    $string_exp = "/^[A-Za-z .'-]+$/";
    
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The E-mail you entered does not appear to be valid.<br />';
  }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Email: ".clean_string($first_name)."\n";



// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
echo (int) mail($email_to, $email_subject, $email_message, $headers);  
?>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.


}

?>
