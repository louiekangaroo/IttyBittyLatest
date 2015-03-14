<?php
require("connection.php");
global $con;

$sql = "SELECT Image FROM Photo_Gallery where Status = 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
       echo "
        <div>" . '<img src="data:image/jpeg;base64,'. base64_encode($row['Image']). '" width="800px" height="365px" alt="Mountain View" u="image">' . "
             " . '<img src="data:image/jpeg;base64,'. base64_encode($row['Image']). '" width="72px" height="72px" alt="Mountain View" u="thumb">' . "
            </div>
       ";
        
    }
} else {
    echo "";
}

?>