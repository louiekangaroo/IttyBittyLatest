<?php 

require_once "Mail.php";
require_once "Mail/mime.php";
require("connection.php");
global $con;

$compname = $_POST['company'];
$comptype = $_POST['comptype'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jobtitle = $_POST['jobtitle'];
$pnumber = $_POST['pnumber'];
$eadd = $_POST['eadd'];
$remarks = $_POST['remarks'];
$regtype = $_POST['regtype'];

$clean_compname = stripslashes($compname);
$clean_comptype = stripslashes($comptype);
$clean_fname = stripslashes($fname);
$clean_lname = stripslashes($lname);
$clean_jobtitle = stripslashes($jobtitle);
$clean_pnumber = stripslashes($pnumber);
$clean_eadd = stripslashes($eadd);
$clean_remarks = stripslashes($remarks);
$clean_regtype = stripslashes($regtype);


	 $sql = ("CALL InsertRegistration('$clean_compname','$clean_comptype','$clean_fname','$clean_lname','$clean_jobtitle','$clean_pnumber','$clean_eadd','$clean_remarks','$clean_regtype')");
          $addregister = $con->query($sql);

	 if($addregister == false){
	   echo"An error has occured".mysql_error();
	 }else{

$From = "Itty Bitty <esowelow@gmail.com>";
$to = "Administrator <louiedbest@gmail.com>";
$subject = "Registration for interest\r\n\r\n";
$body = "<b>Company/Organisation Name: </b>".$clean_compname."<br><br>"
."<b>Company/Organisation Type: </b>".$clean_comptype."<br><br>"
."<b>First Name: </b>".$clean_fname."<br><br>"	
."<b>Last Name: </b>".$clean_lname."<br><br>"  
."<b>Job Title: </b>".$clean_jobtitle."<br><br>"
."<b>Phone Number: </b>".$clean_pnumber."<br><br>"
."<b>Contact Email: </b>".$clean_eadd."<br><br>"
."<b>Remarks: </b>".$clean_remarks."<br><br>"
."<b>Interested in : </b>".$clean_regtype."<br><br><br><br>"
."<i><b>Note:</b> This e-mail is automatically generated. Please do not reply.</i>";
$host = "smtp.mandrillapp.com";
$port = "587";					 // should be 25 by default, but needs to be whichever port the mail server will be using for smtp 
$timeout = "45";				 // typical timeout. try 45 for slow servers
$username = "louiedbest@gmail.com"; // the login for your smtp
$password = "uGYBDA7FBJ15FxBGIQAC6A";			// the password for your smtp
 


$headers = array ('From' => $From,
  'To' => $to,
  'Subject' => $subject);

 $mime = new Mail_mime();
        $mime->setHTMLBody($body);

        $body = $mime->get();
        $headers = $mime->headers($headers);
//$headers= implode("\r\n", $headers);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));
 
$mail = $smtp->send($to, $headers, $body);
 
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
		echo "record successfully added!";		
	 }



?>