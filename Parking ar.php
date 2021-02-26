<?php


?>

<html lang="ar">
    
    <head>
        
        <meta charset="utf-8"><!--to make the site compatible any thing different from english-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--to make the site compatible for internet explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--to make the site compatible for mobiles-->

        <title>Parking</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        
        <style>
            .navbar{
                padding-right: 50px;
                padding-left: 0px;
            }
            
            #logo{
                position: absolute;
                top: 20;
                left: 1800;
            }
        
        </style>
        
    </head>
    
    <body>
        
      
        <nav class="navbar navbar-default navbar-fixed-top color" id="navbar">
            <div class="container-fluid">
                
                
              
                <div class="navbar-header navbar-right">
                    <a class="navbar-brand" href="#">
                        <img id="logo" alt="Brand" src="Pictures/logo.png" width="50px">
                    </a>
            
              
                    <div class="navbar-header h" style="margin-left: 10;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand colorlink parking" onclick='home();' href="#">parking</a>
                    </div>
                </div>
                
                
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle colorlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> المزيد</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Button</a></li>
                      <li><a href="#">Button</a></li>
                      <li><a href="#">Button</a></li>
                        
                        
                    </ul>
                  </li>
                    <li class="contact" id="c" onclick='contact();'><a class="colorlink" href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">اتصل بنا</a></li>
                        <li class="projects" id="p" onclick='projects();'><a class="colorlink" href="#projects">المشاريع السابقة</a></li>
                        <li class="services" id="s" onclick='services();'><a class="colorlink" href="#services">الخدمات</a></li>
                        <li class="about" id="a" onclick='about();'><a class="colorlink" href="#about">المعلومات</a></li>
                        <li class="active home" id="h" onclick='home();'><a class="colorlink" href="#">الصفحة الرئيسية <span class="sr-only">(current)</span></a></li>
                </ul>
                  
                  <form class="navbar-form navbar-right">
                    <div class="input-group">
                      
                        <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> ابحث</button>
                            </span>
                        <input type="text" class="form-control" dir="rtl" placeholder="ابحث" value="">
                    </div>
                    
                  </form>
                
                  
                <ul class="nav navbar-nav navbar-left">
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle colorlink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> اللغة</a>
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
                <center><h2>حلول ركن السيارات</h2></center>
            </div>
            
            <div class="thumb2">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="Pictures/bg.jpg" alt="...">
                  <div class="caption" dir="rtl">
                    <h3>معلومات عن الموقع</h3>
                    <p>اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا</p>
                    <p><a href="#about" onclick="about();" class="btn btn-primary about" role="button">المزيد من المعلومات</a></p>
                  </div>
                </div>
              </div>



              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="Pictures/bg3.jpg" alt="...">
                  <div class="caption" dir="rtl">
                    <h3>الخدمات</h3>
                    <p>اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا</p>
                    <p><a href="#services" onclick="services();" class="btn btn-primary services" role="button">المزيد من المعلومات</a></p>
                  </div>
                </div>
              </div>



            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="Pictures/bg2.jpg" alt="...">
                  <div class="caption" dir="rtl">
                    <h3>المشروعات السابقة</h3>
                    <p>اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا</p>
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
                <button type="button" class="close" style="float: left;" onclick='home();' data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="float: right;" id="myModalLabel">اتصل بنا</h4>
              </div>
                
              <div class="modal-body" style="padding-bottom: 20px;">
                  
                <input type="text" class="form-control" dir="rtl" placeholder="الإسم الأول" width="100%">
                <br>
                <input type="text" class="form-control" dir="rtl" placeholder="الإسم الأخير" width="100%">
                <br>
                <input type="text" class="form-control" dir="rtl" placeholder="الحساب الشخصي" width="100%">
                
                <br>
                  
                <div class="input-group">
                    <input type="text" class="form-control" dir="rtl" placeholder="رقم الهاتف" aria-label="...">
                    <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> كود الرقم</button>
                    <ul class="dropdown-menu">
                        <li><a href="#">+20</a></li>
                        <li><a href="#">+966</a></li>
                        <li><a href="#">+971</a></li>
                    </ul>
                    </div><!-- /btn-group -->
                </div>
                  
                  
                <br>
                <textarea class="form-control" style="height: 300px;" dir="rtl" placeholder="الرسالة"></textarea>
                  
              </div>
                
              <div class="modal-footer">
                <a href="" class="btn btn-primary" style="float: left;" target="_blank"  onclick='closeContact();'>ارسال</a>
                <button type="button" class="btn btn-default" style="float: left;" data-dismiss="modal"  onclick='closeContact();'>اغلاق</button>
              </div>
            </div>
          </div>
        </div>
        
        
        <div id="about" dir="rtl">
        <center><h2>المعلومات</h2></center>
        <br>
        <center>
            <p>اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا</p>    
        </center>
        
        </div>
        
        <div id="services" dir="rtl">
        <center><h2>الخدمات</h2></center>
        <br><br>
        <center>
            <p>اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا</p>    
        </center>
        
        </div>
        
        <div id="projects" dir="rtl">
        <center><h2>المشاريع السابقة</h2></center>
        <br><br>
        <center>
            <p>اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا اكتب المعلومات هنا</p>    
        </center>
        
        </div>
        
        
        <div id="copyright">
            <p style="font-size: 20px;">© 2021 by Parking. All rights reserved.</p>
            
            
            <div style="position: relative;">
            <span><a href=""><img src="Pictures/Icons/facebook.png" width="40px"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a href=""><img src="Pictures/Icons/whatsapp.png" width="40px"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a href=""><img src="Pictures/Icons/twitter.png" width="40px"></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
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
