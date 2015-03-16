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
                        . '<img src="data:image/jpeg;base64,'. base64_encode($row['News_Image']). '" width="130" height="130" alt=\"image\">' . "
                    </div>
                    <div>
                        <h2 class=\"news-header\"> ". $row["News"]. "</h2>
                        <p class=\"news-body\">" . $post . "..</p>
                        <p><a href=\"#". $row["id"]. "\" class=\"btn btn-success\">Read More</a></p>
                    </div>
                </div>
                <div class = \"clear\"></div>
                <style>
#". $row["id"]. " {
	left:50%;
	margin:-100px 0 0 -40%;
	opacity: 0;
	position:absolute;
	top:-50%;
	visibility: hidden;
	width:80%;
	box-shadow:0 3px 7px rgba(0,0,0,.25);
	box-sizing:border-box;
	transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-webkit-transition: all 0.4s ease-in-out;
    padding-top: 60px;
}
	#". $row["id"]. ":target {
		opacity: 1;
		top:50%;
		visibility: visible;
	}
#". $row["id"]. " .header,#". $row["id"]. " .footer {
	border-bottom: 1px solid #e7e7e7;
	border-radius: 5px 5px 0 0;
}
	#". $row["id"]. " .footer {
		border:none;
		border-top: 1px solid #e7e7e7;
		border-radius: 0 0 5px 5px;
	}
#". $row["id"]. " h2 {
	margin:0;
}
#". $row["id"]. " .btn {
	float:right;
}
#". $row["id"]. " .copy,#". $row["id"]. " .header, #". $row["id"]. " .footer {
	padding:15px;
}
.modal-content {
	background: #f7f7f7;
	position: relative;
	z-index: 20;
	border-radius:5px;
}
#". $row["id"]. " .copy {
	background: #fff;
}

#". $row["id"]. " .overlay {
	background-color: #000;
	background: rgba(0,0,0,.5);
	height: 100%;
	left: 0;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 10;
}
                </style>
                
                
                
                <div id=\"". $row["id"]. "\">
                    <div class=\"modal-content\">
                        <div class=\"header\">
                            <h2 class=\"news-header2\">". $row["News"]. "</h2>
                        </div>
                        <div class=\"copy\">
                            <div class = \"news-image\">
                            
                            <div class = \"news-image\">" . '<img src="data:image/jpeg;base64,'. base64_encode($row['News_Image']). '"  width="300" height="300" class=\"img-responsive\"  alt=\"image\">' . "</div>
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