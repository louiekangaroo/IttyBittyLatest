<?php
require("connection.php");
global $con;

$sql = "SELECT Compe_Image, Email FROM competition_info where Status = 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
       echo "
        <div>" . '<img src="data:image/jpeg;base64,'. base64_encode($row['Compe_Image']). '" width="800" height="365" alt=\"Mountain View\" u=\"image\">' 
         '<img src="data:image/jpeg;base64,'. base64_encode($row['Compe_Image']). '" width="72" height="72" alt=\"Mountain View\" u=\"thumb\">' . "
            </div>
            <div u=caption t=\"*\" class=\"captionOrange\"  style=\"position:absolute; left:20px; top: 30px; width:300px; height:30px;\">"
                . base64_encode($row['Email']) . 
                "</div>
       ";
        
        
        
    }
} else {
    echo "";
}

?>