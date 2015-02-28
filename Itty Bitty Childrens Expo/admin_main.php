<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Itty Bitty Children Expo | Administrator</title>

    <!--CSS-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/admin_main.css" rel="stylesheet">



    <!--Javascript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.slides.min.js"></script>
    <script src="http://listjs.com/no-cdn/list.js"></script>



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
                    Administrator Panel
                </a>
            </div>


            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right" id="ul-menu">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
<!--                      <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#logs">Logs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#newsletter">Manage Newsletter</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#photogallery">Manage Photo Gallery</a>
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

    <!-- ABOUT -->
    <section id="logs" class="logs-section">
        <div class="container divContainer">
            <h1 class="section-title">LOGS</h1>
           <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h3 class="column-title"></h3>
                    <div class="column-div">
                       <div id="users">
                        Filter: <input class="search" id="txtSearch" placeholder="Search"/>
                          <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                              <tr>
                                <td class="name">Jonny Stromberg</td>
                                <td class="type">Exhibitor</td>
                              </tr>
                               <tr>
                                <td class="name">Edd Manalastas</td>
                                <td class="type">Exhibitor</td>
                              </tr>
                               <tr>
                                <td class="name">Erwin Pablo</td>
                                <td class="type">Sponsor</td>
                              </tr>
                               <tr>
                                <td class="name">Jefferson Aviso</td>
                                <td class="type">Exhibitor</td>
                              </tr>
                              <tr>
                                <td class="name">Jonas Arnklint</td>
                                <td class="type">Exhibitor</td>
                              </tr>
                              <tr>
                                <td class="name">Martina Elm</td>
                                <td class="type">Sponsor</td>
                              </tr>
                              <tr>
                                <td class="name">Gustaf Lindqvist</td>
                                <td class="type">Photo Uploading</td>
                              </tr>
                            </tbody>
                          </table>

                        </div>
                  </div>
              </div>
        </div>    
    </section>

    <!-- FAQ -->
    <section id="newsletter" class="newsletter-section">
        <div class="container divContainer">
            <h1 class="section-title">MANAGE NEWSLETTERS</h1>
             <div class="row">
                <div class="col-sm-12" style="visibility: visible; margin-bottom: 25px;">
                    <h3 class="column-title"></h3>
                    <div class="column-div">
                        <form class="form-horizontal" id="reg-form" method = "post" action ="process_registration.php">
                            <fieldset>

                                <!-- Form Name -->
                                <legend></legend>

                              
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtTitle">Title</label>
                                    <div class="col-md-4">
                                        <input id="txtTitle" name="title" type="text" class="form-control input-md" required>
                                       
                              
                                    </div>
                                </div>

                
                                <!-- Email-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="txtMessage">Message</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="txtMessage" name="message" style="height: 200px"></textarea>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="btnSubmit"></label>
                                    <div class="col-md-4">
                                        <button id="btnSubmit" name="btnSubmit" class="btn btn-primary">Submit</button>                            
                                    </div>
                                </div>
                            </fieldset>
                        </form>


                    </div>
                </div>
        </div>
    </section>

    <!-- SPONSORS -->
    <section id="photogallery" class="photogallery-section">
        <div class="container divContainer">
            <h1 class="section-title">Manage Photo Gallery</h1>
            
        </div>
    </section>

 <script>
  var options = {
      valueNames: [ 'name', 'type' ]
    };

    var userList = new List('users', options);
</script>

</body>
</html>
