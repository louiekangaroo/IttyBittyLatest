<?php
// Create connection
require("connection.php");
global $con;
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, News, News_Body, News_Image, Date_Created, Status FROM News_Info limit 0, 2";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
        $position=150; // Define how many character you want to display.
        $message= $row["News_Body"]; 
        $post = substr($message, 0, $position); 
        
        
       echo "<div class=\"news_container\">
                    <div class = \"news-image\"> "
                        . '<img src="data:image/jpeg;base64,'. base64_encode($row['News_Image']). '" width="130" height="130" alt=\"Mountain View\">' . "
                    </div>
                    <div>
                        <h2 class=\"news-header\"> ". $row["News"]. "</h2>
                        <p class=\"news-body\">" . $post . "..</p>
                        <p><a href=\"#modal\" class=\"btn btn-success\">Read More</a></p>
                    </div>
                </div>
                <div class = \"clear\"></div>
                <div id=\"modal\">
                    <div class=\"modal-content\">
                        <div class=\"header\">
                            <h2 class=\"news-header2\">". $row["News"]. "</h2>
                        </div>
                        <div class=\"copy\">
                            <div class = \"news-image\">
                            
                            <div class = \"news-image\">" . '<img src="data:image/jpeg;base64,'. base64_encode($row['News_Image']). '"  width="300" height="300" class=\"img-responsive\"  alt=\"Mountain View\">' . "</div>
                            </div>                        
                        <p class=\"news-body\">" . $row["News_Body"]. "</p>
                            <div class = \"clear\"></div>
                        </div>
                        
                        <div class=\"cf footer\">
                            <a href=\"#news\" class=\"btn btn-default\">Close</a>
                        </div>
                    </div>
                    <div class=\"overlay\"></div>
                </div>";
    }
} else {
    echo "No news available at this time";
}

?>