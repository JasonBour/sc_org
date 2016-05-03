<?php 
session_start();

$name = $_POST["name"];
$_SESSION["name"] = $name;
?>

<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
<script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>
    

    
    
      <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

</head>
<body class=" theme-blue">
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
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span><?php echo $name; ?>
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
     
         
    </ul></li>

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-briefcase"></i> Account</a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
        <li ><a href="sign-in.php"><span class="fa fa-caret-right"></span>Logout</a></li>
            <li ><a href="reset-password.php"><span class="fa fa-caret-right"></span> Reset Password</a></li>
    </ul></li>
   
            </ul>
    </div>

    <div class="content">
        <div class="header">
            <div class="stats" style="display:inline">
          
            <input type="text"  class="form-control list_name" placeholder="userlist name">
           <button class="btn btn-primary add_list"  ><i class="fa fa-plus"></i>Add list</button>
  
</div>

            <h1 class="page-title">Dashboard</h1>
                    <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Dashboard</li>
        </ul>

        </div>
        <div class="main-content">
            




    <div class="panel panel-default  ">
        <a  class="panel-heading list1" data-toggle="collapse">朋友组</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">

        
        
        
                              
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary " id="1"><i class="fa fa-plus"></i> New User</button>
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
      <td contenteditable="true">1</td>
      <td contenteditable="true">Jason</td>
      <td contenteditable="true">Male</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    
    
    <tr>
      <td contenteditable="true">2</td>
      <td contenteditable="true">Ashley</td>
      <td contenteditable="true">Jacobs</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
 
      </td>
    </tr>
    <tr>
      <td contenteditable="true">3</td>
      <td contenteditable="true">Audrey</td>
      <td contenteditable="true">Ann</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    <tr>
      <td contenteditable="true">4</td>
      <td contenteditable="true">John</td>
      <td contenteditable="true">Robinson</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
          
      </td>
    </tr>
    <tr>
      <td contenteditable="true">5</td>
      <td contenteditable="true">Aaron</td>
      <td contenteditable="true">Butler</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
        
      </td>
    </tr>
    <tr>
      <td contenteditable="true">6</td>
      <td contenteditable="true">Chris</td>
      <td contenteditable="true">Albert</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
   
      </td>
    </tr>
  </tbody>
</table>











        </div>
    </div>

     <div class="panel panel-default ">
        <a  class="panel-heading list2" data-toggle="collapse">同学组</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">

        
        
        
                              
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" id="2"><i class="fa fa-plus"></i> New User</button>
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
      <td contenteditable="true">1</td>
      <td contenteditable="true">Jason</td>
      <td contenteditable="true">Male</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    
    
    <tr>
      <td contenteditable="true">2</td>
      <td contenteditable="true">Ashley</td>
      <td contenteditable="true">Jacobs</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
 
      </td>
    </tr>
    <tr>
      <td contenteditable="true">3</td>
      <td contenteditable="true">Audrey</td>
      <td contenteditable="true">Ann</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    <tr>
      <td contenteditable="true">4</td>
      <td contenteditable="true">John</td>
      <td contenteditable="true">Robinson</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
          
      </td>
    </tr>
    <tr>
      <td contenteditable="true">5</td>
      <td contenteditable="true">Aaron</td>
      <td contenteditable="true">Butler</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
        
      </td>
    </tr>
    <tr>
      <td contenteditable="true">6</td>
      <td contenteditable="true">Chris</td>
      <td contenteditable="true">Albert</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
   
      </td>
    </tr>
  </tbody>
</table>











        </div>
    </div>

    <div class="panel panel-default ">
        <a  class="panel-heading list3" data-toggle="collapse">老师组</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">

        
        
        
                              
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" id="3"><i class="fa fa-plus"></i> New User</button>
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
      <td contenteditable="true">1</td>
      <td contenteditable="true">Jason</td>
      <td contenteditable="true">Male</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    
    
    <tr>
      <td contenteditable="true">2</td>
      <td contenteditable="true">Ashley</td>
      <td contenteditable="true">Jacobs</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
 
      </td>
    </tr>
    <tr>
      <td contenteditable="true">3</td>
      <td contenteditable="true">Audrey</td>
      <td contenteditable="true">Ann</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>

      </td>
    </tr>
    <tr>
      <td contenteditable="true">4</td>
      <td contenteditable="true">John</td>
      <td contenteditable="true">Robinson</td>
      <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
          
      </td>
    </tr>
    <tr>
      <td contenteditable="true">5</td>
      <td contenteditable="true">Aaron</td>
      <td contenteditable="true">Butler</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a ><i class="fa fa-pencil"></i></a>
        
      </td>
    </tr>
    <tr>
      <td contenteditable="true">6</td>
      <td contenteditable="true">Chris</td>
      <td contenteditable="true">Albert</td>
       <td contenteditable="true">武汉市东西湖区</td>
      <td contenteditable="true">435300</td>
      <td contenteditable="true">1234567</td>
      <td contenteditable="true">13207166553</td>
      <td contenteditable="true">callmejasonbourne@gmail.com</td>
      <td contenteditable="true">
          <a><i class="fa fa-pencil"></i></a>
   
      </td>
    </tr>
  </tbody>
</table>











        </div>
    </div>
       
    </div>
    
    
<div class="row">
  
</div>


            <footer>
                <hr>

              
            </footer>
        </div>
    </div>
    
    
    
    
    
    <!--  -->
    

    
    
    
    
    
    
    
    
    
    
    
    
    
  <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

   
     <script type="text/javascript">
     var num = 3;
     for(var i = 0 ;i<20;i++){
    	 $(".list"+i).on("click",function(){
             
             $(this).parent().find("table").slideToggle();
             });
         }
     $(".add_list").on("click",function(){
        
          var list_name  = "new_list";
         if($(".list_name").val()!=null){
                list_name = $(".list_name").val();
             }
        
    	 $(".main-content").append('<div class="panel panel-default "'+"list"+(num++)+'"><a  class="panel-heading" data-toggle="collapse">'+list_name+'</a><div id="page-stats" class="panel-collapse panel-body collapse in"><div class="btn-toolbar list-toolbar"><button class="btn btn-primary" id="'+(num++)+'"><i class="fa fa-plus"></i> New User</button><button class="btn btn-default">Import</button><button class="btn btn-default">Export</button><div class="btn-group"></div></div><table class="table"><thead><tr><th>No</th><th>姓名</th><th>性别</th><th>地址</th><th>邮编</th><th>电话</th><th>手机</th><th>email</th><th style="width: 3.5em;"></th></tr></thead><tbody></table></div>');
    	 bindAddUser();
           });


     function bindAddUser(){
    	  for(var i = 0 ;i<20;i++){
    	    	 $("#"+i).on("click",function(){
    	             
    	             $(this).parent().parent().find("tbody").append('<tr><td contenteditable="true">新id</td> <td contenteditable="true">新用户</td><td contenteditable="true">性别</td><td contenteditable="true">地址</td><td contenteditable="true">邮编</td><td contenteditable="true">电话</td><td contenteditable="true">手机</td><td contenteditable="true">邮箱</td>  <td contenteditable="true"><a ><i class="fa fa-pencil"></i></a></td></tr>');

    	              });
    	         }
 
         }
     bindAddUser();
   
 
       

     
    </script>
  
</body></html>
