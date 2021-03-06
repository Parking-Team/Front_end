<?php


?>

<html lang="en">
    
    <head>
        
        <meta charset="utf-8"><!--to make the site compatible any thing different from english-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--to make the site compatible for internet explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--to make the site compatible for mobiles-->

        <title>Parking</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    
    <body>
        
      
        <nav class="navbar navbar-default navbar-fixed-top color" id="navbar">
            <div class="container-fluid">
                
                
              
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img id="logo" alt="Brand" src="Pictures/logo.png" width="50px">
                    </a>
            
              
                    <div class="navbar-header h">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand colorlink parking" onclick='home();' href="#">Parking</a>
                    </div>
                </div>
                
                
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                    
                  <li class="active home" id="h" onclick='home();'><a class="colorlink" href="#">Home <span class="sr-only">(current)</span></a></li>
                  
                  <li class="about" id="a" onclick='about();'><a class="colorlink" href="#about">About us</a></li>
                  <li class="services" id="s" onclick='services();'><a class="colorlink" href="#services">Services</a></li>
                  <li class="projects" id="p" onclick='projects();'><a class="colorlink" href="#projects">Previous projects</a></li>
                  <li class="contact" id="c" onclick='contact();'><a class="colorlink" href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Contact us</a></li>
                    
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle colorlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Button</a></li>
                      <li><a href="#">Button</a></li>
                      <li><a href="#">Button</a></li>
                    </ul>
                  </li>
                    
                </ul>
                  
                  <form class="navbar-form navbar-left">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" value="">
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Submit</button>
                            </span>
                    </div>
                    
                  </form>
                
                  
                <ul class="nav navbar-nav navbar-right">
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle colorlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="Parking%20en.php">English</a></li>
                      <li><a href="Parking%20ar.php">العربية</a></li>
                    </ul>
                  </li>
                </ul>
                  
              </div><!-- /.navbar-collapse -->
                
            </div><!-- /.container-fluid -->
          </nav>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <center>
        
        <div id="carousel-example-generic" class="carousel slide div" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="Pictures/bg.jpg" alt="...">
              <div class="carousel-caption">
                1
              </div>
            </div>
            <div class="item">
              <img src="Pictures/bg2.jpg"  alt="...">
              <div class="carousel-caption">
                2
              </div>
            </div>
            <div class="item">
              <img src="Pictures/bg3.jpg"  alt="...">
              <div class="carousel-caption">
                3
              </div>
            </div>
          </div>

          <!-- Controls -->
          <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>-->
        </div>
        </center>
        
        
        
        <br><br>
        
        
        
        <div class="thumb">
            
            <div class="thumb1">
                <center><h2>Parking Solutions</h2></center>
            </div>
            
            <div class="thumb2">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="Pictures/bg.jpg" alt="...">
                  <div class="caption">
                    <h3>About</h3>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                    <p><a href="#about" onclick="about();" class="btn btn-primary about" role="button">More Info</a></p>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="Pictures/bg3.jpg" alt="...">
                  <div class="caption">
                    <h3>Services</h3>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                    <p><a href="#services" onclick="services();" class="btn btn-primary services" role="button">More Info</a></p>
                  </div>
                </div>
              </div>



            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="Pictures/bg2.jpg" alt="...">
                  <div class="caption">
                    <h3>Previous Projects</h3>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
                    <p><a href="#projects" onclick="projects();" class="btn btn-primary projects" role="button">More Info</a></p>
                  </div>
                </div>
              </div>
            </div>
            
            </div>
        </div>
        
        
        
        
        
        
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close"  onclick='home();' data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
              </div>
                
              <div class="modal-body" style="padding-bottom: 20px;">
                  
                <input type="text" class="form-control" placeholder="First Name" width="100%">
                <br>
                <input type="text" class="form-control" placeholder="Last Name" width="100%">
                <br>
                <input type="text" class="form-control" placeholder="E-mail" width="100%">
                  
                <br>
                  
                  
                  
                  <input type="text" class="form-control" style="" placeholder="Mobile Phone" width="100%">
                  
                  <br>
                  
                  <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">+20</a></li>
          <li><a href="#">+966</a></li>
          <li><a href="#">+971</a></li>
        </ul>
      </div><!-- /btn-group -->
      <input type="text" class="form-control" placeholder="Phone Number" aria-label="...">
    </div>
                  
                  
                <br>
                <textarea class="form-control" style="height: 300px;"  placeholder="Message..."></textarea>
                  
              </div>
                
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"  onclick='closeContact();'>Close</button>
                  <a href="" class="btn btn-primary" target="_blank"  onclick='closeContact();'>Send</a>
              </div>
            </div>
          </div>
        </div>
        
        
        <div id="about">
        <center><h2>About Us</h2></center>
        <br>
        <center>
            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors.</p>    
        </center>
        
        </div>
        
        <div id="services">
        <center><h2>Services</h2></center>
        <br><br>
        <center>
            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors.</p>    
        </center>
        
        </div>
        
        <div id="projects">
        <center><h2>Previous Projects</h2></center>
        <br><br>
        <center>
            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors.</p>    
        </center>
        
        </div>
        
        
        <div id="copyright">
            <p style="font-size: 20px;">© 2021 by Parking. All rights reserved.</p>
            
            
            <div style="position: relative;">
            <span><a href=""><img src="Pictures/Icons/facebook.png" width="40px"></a></span>
            <span><a href=""><img src="Pictures/Icons/whatsapp.png" width="40px"></a></span>
            <span><a href=""><img src="Pictures/Icons/twitter.png" width="40px"></a></span>
            <span><a href=""><img src="Pictures/Icons/google-plus.png" width="40px"></a></span>
            </div>
            
            
            <img src="Pictures/Egypt%20map.PNG" style="margin-left: 500px; margin-top: -75px;">
            
        </div>
        
        
        <!--<div class="navbar-fixed">
        <img width="100%" id="bg" src="Pictures/bg.jpg">
        </div>-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script><!-- to make the site compatible for older versions of internet explorer -->
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><!-- to make the site compatible for older versions of internet explorer -->
        <script src="JQ\Jquery.js"></script>
        
        <script src="js\bootstrap.min.js"></script>
        
        <script src="js\scripts.js"></script>
        
        <script src="JQ\jq.js"></script>
        
    </body>
</html>
