<?php 
require_once "Mail.php";
require_once "Mail/mime.php";
require_once 'lib/swift_required.php';
require("connection.php");
global $con;

$newshead = $_POST['newshead'];
$newsbody = $_POST['newsbody'];
//$newsimage = $_POST['fileselect'];


	 $sql = ("CALL InsertNews('$newshead','$newsbody','{$_FILES['fileselect']['name']}')");
          $addnews = $con->query($sql);

	 if($addnews == false){
	   echo"An error has occured".mysql_error();
	 }else{

    $query = "SELECT Email FROM Subscribe_Info";
if(!($result = $con->query($query)))
{
echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
}
else
{ 
      $var_result = false;
        while($row = $result->fetch_array(MYSQLI_BOTH))
        {
       
        $target_path = "images/";
        $target_path = $target_path . basename( $_FILES['fileselect']['name']); 
        //a destination path with filename. Make sure your uploads folder have read write permission
        move_uploaded_file($_FILES["fileselect"]["tmp_name"], $target_path);
 
        $transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587)
        ->setUsername('louiedbest@gmail.com')
        ->setPassword('pXC6c47zRA17xmQneipLOQ');

        // Create the message
        $message = Swift_Message::newInstance();
        //sender
        $message->setFrom(array('esowelow@gmail.com' => 'Itty Bitty'));
    //subject
        $message->setSubject('Itty Bitty Newsletter');
        // Or set it after like this
        $cid=$message->embed(Swift_Image::fromPath($target_path)->setDisposition('inline'));
        //
        $message->setBody('<a href="http://localhost:8080/ittybittylatest/trunk/itty%20bitty%20childrens%20expo/news.html#news"><img src="'.$cid.'" alt="cid1" width="500px" height="250px"/><br><b>'.$newshead.'</b></a><br>'.substr($newsbody,0,100).'....<a href="http://localhost:8080/ittybittylatest/trunk/itty%20bitty%20childrens%20expo/news.html#news"><b>Read more<b></a><br><br><br><b>Note:</b><i>This e-mail is automatically generated. Please do not reply.</i>', 'text/html');
        //$message->embed(Swift_Image::fromPath("http://localhost/ittybittylatest/trunk/itty%20bitty%20childrens%20expo/images/bg2.jpg"))
        // Add alternative parts with addPart()
        $message->addPart('Read the latest news of Itty Bitty Childrens Expo', 'text/plain');

        // The two statements above could be written in one line instead
        //$message->attach(Swift_Attachment::fromPath('http://localhost/ittybittylatest/trunk/itty%20bitty%20childrens%20expo/images/bg2.jpg')-               >setDisposition('inline'));

        //msg lenght
        $message->setMaxLineLength(10000);


        $mailer = Swift_Mailer::newInstance($transport);
    
      
        //recepient
                 
            if ($var_result = true)
            {
               // $message->addTo($row[0]);
                $message->addCc($row[0]);
            }
            else 
            {
               $message->setTo($row[0]);   
               $var_result = true;
            }     
      
        $send = $mailer->send($message);
     
 }
         if(!$send)
        {
            echo "msg not send";
            unlink($target_path);
        }
        else
        {
            echo "msg send";
            unlink($target_path);
        } 
    }
}

?>