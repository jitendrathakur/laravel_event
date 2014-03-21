<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	{{ HTML::style('assets/css/style.css'); }}

	{{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css'); }}
	{{ HTML::style('assets/plugins/bootstrap/css/bootstrap-responsive.min.css'); }}

	{{ HTML::style('assets/plugins/bootstrap-select2/select2.css'); }}
	{{ HTML::style('assets/plugins/jquery-slider/css/jquery.sidr.light.css'); }}
	{{ HTML::style('assets/plugins/jquery-datatable/css/jquery.dataTables.css'); }}
	{{ HTML::style('assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css'); }}
	{{ HTML::style('assets/plugins/datatables-responsive/css/datatables.responsive.css'); }}
	{{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css'); }}
	
	{{ HTML::style('assets/css/animate.min.css'); }}
	{{ HTML::style('assets/css/responsive.css'); }}
	{{ HTML::style('assets/css/custom-icon-set.css'); }}

	
</head>
<body>

<div class="header navbar navbar-inverse ">


  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> 
		</li>
      </ul>
      <!-- BEGIN LOGO -->
      <a href="index.html"><img src="assets/img/logo.png" class="logo"  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" /></a>
      <!-- END LOGO -->
   
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->


    <div class="header-quick-nav" >
      	<!-- BEGIN TOP NAVIGATION MENU -->
      	<div class="pull-left">
	        <ul class="nav quick-section">
				<li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
	            <div class="iconset top-menu-toggle-dark"></div>
	            </a>
				</li>
				<div class="input-prepend inside search-form no-boarder"> 
					<span class="add-on"> 
						<a class="" href="#">
			            	<div class=" top-search"></div>
			            </a>
		            </span>
		           	<input type="text" style="width:250px;" placeholder="" class="no-boarder " name="">
	          	</div>
	        </ul>
  		</div>
      	<!-- END TOP NAVIGATION MENU -->


      	<!-- BEGIN CHAT TOGGLER -->
      	<div class="pull-right"> 
		<div class="chat-toggler">	
			<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom">
					
				<div class="user-details"> 
					<div class="username">
					
						John <span class="bold">Smith</span>									
					</div>						
				</div> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right" href="#">	
				<div class="iconset top-down-arrow"></div>
				</a>
				
		  	<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="/"> My Account</a>
              </li>
			  <li><a href="/">Profile</a>
              </li>
              <li><a href="/">Recent Activity</a>
              </li>
              <li><a href="/"> Subscriptions</a>
              </li>
			  
			  <li><a href="/"> Customization</a>
              </li>
              <li class="divider"></li>                
              <li><a href="/"><i class="icon-off"></i>&nbsp;&nbsp;Log Out</a></li>
           	</ul>
		   
			</a>						
			<div class="profile-pic"> 
				<img alt="" src="assets/img/profiles/avatar_small.jpg" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
			</div>       			
		</div>
		
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>


</div>
<!-- END HEADER -->


<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="user-info-wrapper">
      <div class="profile-wrapper"> <img src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
      <div class="user-info">
        <div class="greeting">Welcome</div>
        <div class="username">John <span class="semi-bold">Smith</span></div>
        <div class="status">Status<a href="#">
          <div class="status-icon green"></div>
          Online</a></div>
      </div>
    </div>
    <!-- END MINI-PROFILE -->
    <!-- BEGIN SIDEBAR MENU -->
   
    <ul>
  
      	<li class="active"> 
	      	<a href="{{ url('/') }}">  
	      		<img width="20" src="assets/img/selecticon/home.png"/> <span class="title">Dashboard</span> 
      	 	</a> 
  	 	</li>
      	<li class="" > 
      		<a href="{{ url('managers') }}">
      			<img width="20" src="assets/img/icon_speakers@2x.png"/> 
      			<span class="title">Speakers</span>  
  			</a> 
		</li>

	  	<li class=""> 
	  		<a href="{{ url('events') }}">
	  			<img width="20" src="assets/img/Sessions.png"/> <span class="title">Sessions</span>  
  			</a> 
		</li>
	  	<li class=""> <a href="Sponsors.html"> <img width="20" src="assets/img/award@2x.png"/> <span class="title">Sponsors</span>  </a> </li>
	  	<li class=""> <a href="Exhibitors.html"> <img width="20" src="assets/img/icon_exhibitors@2x.png"/> <span class="title">Exhibitors</span>  </a> </li>
	  	<li class=""> <a href="Booths.html"> <img width="20" src="assets/img/booths.png"/> <span class="title">Booths</span>  </a> </li>
	  	<li class=""> <a href="Attendee.html"> <img width="20" src="assets/img/Attendee.png"/> <span class="title">Attendee</span>  </a> </li>
	  	<li class=""> <a href="Hotels.html"> <img width="20" src="assets/img/icon_hotels@2x.png"/> <span class="title">Hotels</span>  </a> </li>
	  	<li class=""> <a href="Messaging.html"> <img width="20" src="assets/img/messages@2x.png"/> <span class="title">Push Messaging</span>  </a> </li>
   
    </ul>

    <a href="#" class="scrollup">Scroll</a>
    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
  </div>

  <!-- END SIDEBAR -->

	<!-- BEGIN PAGE CONTAINER-->
  	<div class="page-content">
    	<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
   
    	<div class="clearfix"></div>
    	<div class="content">

	    	<!-- SECTION 1 -->
			<div class="row-fluid spacing-bottom">		
		    	<div class="row">
		    		<div class="span12">
	    				@yield('content')
	    			</div>
	    		</div>
			</div>
		
			<!-- SECTION 2 -->
			<div class="row-fluid spacing-bottom">		
			   
			</div>
	
		</div>
	
  </div>
  
</div>
<!-- END PAGE -->

<!-- END CONTAINER -->

{{ HTML::script('assets/plugins/jquery-1.8.3.min.js'); }}
{{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js'); }}
{{ HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js'); }}
{{ HTML::script('assets/js/jquery-migrate-1.2.1.min.js'); }}

{{ HTML::script('assets/plugins/breakpoints.js'); }}
{{ HTML::script('assets/plugins/jquery-unveil/jquery.unveil.min.js'); }}
{{ HTML::script('assets/plugins/jquery-block-ui/jqueryblockui.js'); }}
{{ HTML::script('assets/plugins/jquery-slider/jquery.sidr.min.js'); }}
{{ HTML::script('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js'); }}
{{ HTML::script('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); }}
{{ HTML::script('assets/plugins/bootstrap-select2/select2.min.js'); }}
{{ HTML::script('assets/plugins/jquery-datatable/js/jquery.dataTables.min.js'); }}
{{ HTML::script('assets/plugins/jquery-datatable/extra/js/TableTools.min.js'); }}
{{ HTML::script('assets/plugins/datatables-responsive/js/datatables.responsive.js'); }}
{{ HTML::script('assets/plugins/datatables-responsive/js/lodash.min.js'); }}
{{ HTML::script('assets/js/datatables.js'); }}
{{ HTML::script('assets/js/core.js'); }}
{{ HTML::script('assets/js/demo.js'); }}



</body>
</html>
