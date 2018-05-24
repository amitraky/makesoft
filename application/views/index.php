<!DOCTYPE html>
<!-- saved from url=(0062)<?php echo base_url()?>/php-adminpanel/examples/sample3/index.php -->
<html class="gr__apphp_com">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<title>Tikdata AdminPanel Development :: Admin Panel</title>
<meta name="description" content="Website Back-End management script that provides access to the control features of your site.">
<meta name="author" content="Tikdata Company - Advanced Power of PHP">
<meta name="generator" content="Tikdata AdminPanel">
<link rel="SHORTCUT ICON" href="<?php echo base_url()?>">
<link href="<?php echo base_url()?>/assets/css/blue/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/styles.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/css/sample/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/menu.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/left_menu.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/common.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.demo.topbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/themes.css">
</head>

<!-- JavaScript files -->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/functions.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/dg.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/dg-en.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/jsafv-en.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/assets/js/diactric_chars_utf8.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/form.scripts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/left_menu.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/demo.topbar.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/calendar.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/calendar-setup.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/calendar-en.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/functions.wizard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/functions.common.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/index.js"></script>



<script type="text/javascript">	
			var menu_group_count = 100;
			var left_panel_scrolling = true; 
			var default_session_timeout = 150; // in sec
			var minimal_timeout_value = default_session_timeout/10; // in sec
			var session_timeout = default_session_timeout; // in sec
			var delaytime = 50000; // in msec		
			
			

function base_url(url=null){return '<?php echo base_url()?>'+url;}
function uri(){ return '<?php echo $this->uri->segment(2)?>'; } 
  var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);           
            return ret;
        }		
	</script>

<style>
.activeMenu{
color: #ff4400;
    text-decoration: underline;
}
</style>

<body style="overflow:auto;"  data-gr-c-s-loaded="true">
<!-- session expired popup -->
	
<table class="main_table" cellpadding="0" cellspacing="0" border="0" width="100%">
<tbody>
  <tr valign="top" id="top_header" style="position:fixsed">
    <td class="td_header" colspan="3"><div id="header">
        <div class="header_wrapper"> 
          <div class="header_caption_ltr"> <span class="site_header"><a href="<?php echo base_url()?>/php-adminpanel/examples/sample3/">Administrator Panel</a></span><br>
            Tikdata AdminPanel Development </div>
          <div class="header_caption_ltr"><a class="logout" href="">Opening Balance :98741</a> <b> |  </b><a class="logout" href="">Closing Balance : 504962 </a>  </div>
          <div class="header_logout_ltr"><a class="logout" href="<?php echo base_url('Auth/logout')?>">[Log Out]</a> </div>
          <div class="clear"></div>
        </div>
      </div></td>
  </tr>
  <tr>
    <td id="colLeft" width="180px" valign="top"><table celppadding="0" cellspacing="0" border="0" width="100%">
        <tbody>
          <tr>
            <td><div dir="ltr" id="textfilters" style="border: 0px; width: 182px; overflow-x: hidden; overflow-y: auto;">                        
               
               
				
				<?php

				foreach($menus as $key=>$menu){?>
				  <div class="curtainBox maximized " id="filter<?php echo $key;?>" >
                  <div onclick="toggleMenu('', <?php echo $key;?>);" class="header switch"> <span class="expand_ltr" id="plusbox<?php echo $key;?>"><img class="plusbox_img" alt="(+)" src="<?php echo base_url()?>assets/images/expand.gif"></span> <span class="collapse_ltr" id="minusbox<?php echo $key;?>"><img class="minusbox_img" alt="(-)" src="<?php echo base_url()?>assets/images/collapse.gif"></span> <strong><?php echo $menu['m10_title']?></strong> </div>
                  <div class="curtain" id="filterPopularFilterValues<?php echo $key;?>">
                    <ul class="case1 popularFilterValues ltr">
					<?php foreach($menu['sub_menu'] as $sub_menu){ $link = $sub_menu['m10_controller'].'/'.$sub_menu['m10_function']?>
                      <li ><a onclick="toggleMenu('', <?php echo $key;?>);" href="<?php echo base_url("$link")?>" ><?php echo $sub_menu['m10_title']?></a></li>
                    <?php } ?>
                    </ul>
                  </div>
                </div>
				<?php } ?>
				
				
              </div></td>
          </tr>
        </tbody>
      </table></td>
    <td id="colMiddle" width="12px" valign="top" align="center"><img id="imgArrow" onclick="resizeLeftPanel(&#39;ltr&#39;)" src="<?php echo base_url()?>assets/images/collapse_panel.gif" alt="collapse" title="Click to collapse side panel"></td>
    <td id="colMain" valign="top"  style="min-width:400px;padding-top:2px;padding-right:4px;"> 
      <!-- saved from url=(0068)<?php echo base_url()?> -->
      
      <?php $this->load->view($page);?>
	 
	 	<div id="fade" class="black_overlay" onclick="javascript:appCloseExpiredWindow();"></div>
	<div id="light">
		<div class="white_content">
			<br />
            <b>Your session will expire soon. Please make sure to save your work often! You may click on</b>
			<br /><br />
			<ul>
				<li>STAY LOGGED to reset session timeout</li>
				<li>LOGOUT to finish current session.</li>
			</ul>
			<br /><br />
			<input type="button" value="Stay Logged" onclick="javascript:appCloseExpiredWindow();" />
			&nbsp;&nbsp;&nbsp;
			<input type="button" value="Logout" onclick="javascript:window.location.href='logout.php'" />
		</div> 
	</div>
	 <script>/*setTimeout("checkSessionTimeout()", 30000); */menuDisplay();</script>
</body>
</html>


