<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Itty Bitty Children Expo | News</title>

    <!--CSS-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/news.css" rel="stylesheet">
     <link href="css/socialstyle.css" rel="stylesheet">
    

    <!--Javascript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.slides.min.js"></script>
    <!---New JS-->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script type="text/javascript" src="js/news-slider.js"></script>
    <script type="text/javascript" src="js/news.js"></script>
    <script type="text/javascript" src="js/ajaxloader.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="#page-top">
                    <!-- <img src="img/j2logosmall.png" id="smallLogo" /> -->
                    <!-- Itty Bitty Children Expo -->
                </a>
            </div>


            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right" id="ul-menu">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="index">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#news">News articles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#newsletter">Register newsletters</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Image gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#presskit">Press kit</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#blogs">Blogs and Discussions</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container divContainer">
            
        </div>
    </section>

    <!-- NEWS -->
    <section id="news" class="news-section">
        <div class="container divContainer">
            <h1 class="section-title">NEWS ARTICLES</h1>
            <h4 class="column-title"></h4>
            <div class="column-div">
            <?php
                 include("newsdetails.php");
               
              ?>      
                </div>
                
            </div>
    </section>

     <section id="newsletter" class="newsletter-section">
        <div class="container divContainer">
            <h1 class="section-title">REGISTER TO RECEIVE NEWSLETTERS</h1>
             <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h4 class="column-title"></h4>
                    <div class="column-div">
                        <p>Stay up to date with the Itty Bitty Kids Expo, by subscribing to our newsletter.</p>
                        <form class="form-horizontal" id="reg-form" method = "post" action ="">
                            <fieldset>

                                <!-- Form Name -->
                                <legend></legend>

                              
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtFName">First Name <span class="error">*</span></label>
                                    <div class="col-md-4">
                                        <input id="txtFName" name="fname" type="text" class="form-control input-md" required>
                                       
                              
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtLName">Last Name <span class="error">*</span></label>
                                    <div class="col-md-4">
                                        <input id="txtLName" name="lname" type="text" class="form-control input-md" required>
                                       
                              
                                    </div>
                                </div>
                
                                <!-- Email-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtEmail">Email Address<span class="error">* </span></label>
                                    <div class="col-md-4">
                                        <input id="txtEmail" name="eadd" type="email" class="form-control input-md" required>
                                        
                                    </div>
                                </div>
                                
                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="btnSubmit"></label>
                                    <div class="col-md-4">
                                        <button id="btnSubmit" name="btnSubmit" class="btn btn-primary" >Submit</button>                            
                                    </div>
                                </div>
                            </fieldset>
                        </form>


                    </div>
                </div>
            </div>
    </section>

    <section id="gallery" class="gallery-section">
        <div class="container divContainer">
            <h1 class="section-title">IMAGE GALLERY</h1>
            <h4 class="column-title"></h4>
            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 800px;
        height: 456px; background: #191919; overflow: hidden; margin:10px auto;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 356px; overflow: hidden;">
            <?php
                 include("Photo_Gallery_Dtls.php");
               
              ?>      
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 800px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p           (normal)
                .jssort01 .p:hover     (normal mouseover)
                .jssort01 .pav           (active)
                .jssort01 .pav:hover     (active mouseover)
                .jssort01 .pdn           (mousedown)
                */
                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(../img/t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 68px;
                    height: 68px;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
    </div>
        </div>
    </section>

    <section id="presskit" class="presskit-section">
        <div class="container divContainer">
            <h1 class="section-title">PRESS KIT</h1>
            
        </div>
    </section>
         
<br>
         <section id="blogs" class="blog-section">
        <div class="container divContainer">
            <h1 class="section-title">BLOGS AND DISCUSSION</h1>
            <h3 class="column-title">
            </h3>        
              <div id="disqus_thread" class="column-div">
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'ittybitty-au';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'ittybitty-au';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
                  </div>
    </section>
             <br>
<div class="clear"></div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="footer-info">
                    &copy; 2015 Itty Bitty Children Expo. <!-- Designed by <a target="_blank" href="http://shapebootstrap.net/" title="Ang mga pogi ng CS">Aviso, Llagas, Manalastas</a> -->
                </div>
                <div class="col-sm-6" id="social-for-mobile">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
           
            </div>
        </div>
        
        
        <nav class="social" id="social-for-web">
          <ul>
                <li><a href="http://facebook.com"><img src="images/Facebook.png" alt="" width="38" height="38" class="circle"/></a></li><br>
              <li><a href="http://twitter.com"><img src="images/Twitter.png" alt="" width="38" height="38" class="circle"/></a></li><br>
             <li><a href="http://www.instagram.com"><img src="images/Instagram.png" alt="" width="38" height="38" class="circle"/></a></li><br>

          </ul>
        </nav>
    </footer><!--/#footer-->

</body>
</html>