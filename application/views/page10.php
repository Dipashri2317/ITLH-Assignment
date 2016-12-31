<html>
<head><title>page10</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/page10.css">
<link rel="stylesheet" href="/public/page10.js">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<form method="post" >
<script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>


<!-- header start -->
<div class="container">
<nav class="navbar navbar-default" role="navigation" style="background-color:black;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" >
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><b style="color:white;">Book Adda</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Best Selling</a></li>
      <li><a href="#">Academic</a></li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Indian Writing<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Marathi Language</a></li>
           <li class="divider"></li>
          <li><a href="#">Hindi Language</a></li>
          
        </ul>
      </li>
    </ul>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Sign Up</a></li>
      <li><a href="#">Sign In</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>
<!-- header end -->
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">SIGN UP <small>It's free!</small></h3>
                        </div>
                        <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm floatlabel" placeholder="First Name">
                                    </div>
                                </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                     <div  class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-female"></i></span> &nbsp;&nbsp;
                                        <input type="radio" name="gender">                   
                                    </div>
                                </div>
                             </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <div class="form-group">
                                    <div  class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-male"></i></span> &nbsp;&nbsp;
                                        <input type="radio" name="gender">                   
                                     </div>
                                </div>

                            </div>
                            </div>

                            <div class="form-group">

                            <div  class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input id="DOB" type="text" class="form-control input-sm" name="DOB"  placeholder="Date of birth">                                        
                             </div>
                             </div>

                             <div class="form-group">

                                <div  class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input id="Contact_No" type="tel" class="form-control input-sm" name="contact"  placeholder="Contact Number">                                        
                                </div>
                            </div>

                            <div class="form-group">
                                 <div  class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                </div>
                            </div>

                            

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm floatlabel" placeholder="Password">
                                    </div>
                                </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="confirm_password" id="password" class="form-control input-sm" placeholder="Re-Enter-password">
                                    </div>
                                  </div>
                            </div>
                           
                            <div class="form-group">
                                 <div  class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        
                                <textarea class="form-control input-sm" rows="5" id="comment" name="address"></textarea>
                                </div>
                            </div>
                
                             
                           
                            
                            <input type="submit" value="Register" class="btn btn-info btn-block">
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   </form>
    </body>
    </html>