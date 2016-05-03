<?php 
session_start();
$_SESSION["name"] 
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

</head>
<body class=" theme-blue">

    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.php"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Aircraft</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span><?php echo $_SESSION["name"] ; ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="./">My Account</a></li>
               
                <li><a tabindex="-1" href="sign-in.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    

    <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
            <li><a href="index.php"><span class="fa fa-caret-right"></span> Main</a></li>
            <li class="active"><a href="users.php"><span class="fa fa-caret-right"></span> User List</a></li>
            <li ><a href="user.php"><span class="fa fa-caret-right"></span> User Profile</a></li>

          
    </ul></li>

    

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Account</a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
    <li ><a href="sign-in.php"><span class="fa fa-caret-right"></span>Logout</a></li>
            <li ><a href="reset-password.php"><span class="fa fa-caret-right"></span> Reset Password</a></li>
    </ul></li>

        

    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">Users</h1>
                    <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Users</li>
        </ul>

        </div>
        <div class="main-content">
            
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary"><i class="fa fa-plus"></i> New User</button>
    <button class="btn btn-default">Import</button>
    <button class="btn btn-default">Export</button>
  <div class="btn-group">
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>姓名</th>
      <th>性别</th>
      <th>地址</th>
      <th>邮编</th>
      <th>电话</th>
      <th>手机</th>
      <th>email</th>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Jason</td>
      <td>Male</td>
      <td>武汉市东西湖区</td>
      <td>435300</td>
      <td>1234567</td>
      <td>13207166553</td>
      <td>callmejasonbourne@gmail.com</td>
      <td>
          <a href="user.php"><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    
    
    <tr>
      <td>2</td>
      <td>Ashley</td>
      <td>Jacobs</td>
      <td>武汉市东西湖区</td>
      <td>435300</td>
      <td>1234567</td>
      <td>13207166553</td>
      <td>callmejasonbourne@gmail.com</td>
      <td>
          <a href="user.php"><i class="fa fa-pencil"></i></a>
 
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Audrey</td>
      <td>Ann</td>
       <td>武汉市东西湖区</td>
      <td>435300</td>
      <td>1234567</td>
      <td>13207166553</td>
      <td>callmejasonbourne@gmail.com</td>
      <td>
          <a href="user.php"><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>John</td>
      <td>Robinson</td>
      <td>武汉市东西湖区</td>
      <td>435300</td>
      <td>1234567</td>
      <td>13207166553</td>
      <td>callmejasonbourne@gmail.com</td>
      <td>
          <a href="user.php"><i class="fa fa-pencil"></i></a>
          
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Aaron</td>
      <td>Butler</td>
       <td>武汉市东西湖区</td>
      <td>435300</td>
      <td>1234567</td>
      <td>13207166553</td>
      <td>callmejasonbourne@gmail.com</td>
      <td>
          <a href="user.php"><i class="fa fa-pencil"></i></a>
        
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Chris</td>
      <td>Albert</td>
       <td>武汉市东西湖区</td>
      <td>435300</td>
      <td>1234567</td>
      <td>13207166553</td>
      <td>callmejasonbourne@gmail.com</td>
      <td>
          <a href="user.php"><i class="fa fa-pencil"></i></a>
   
      </td>
    </tr>
  </tbody>
</table>

<!--  
<ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
-->


            <footer>
                <hr>

               
            </footer>
        </div>
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
     <script type="text/javascript">
   
     
    
     

     </script>
    
  
</body></html>
