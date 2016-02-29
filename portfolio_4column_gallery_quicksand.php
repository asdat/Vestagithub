<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Incorporate Theme / 4 Column Gallery</title>
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700,800,600,500,300,200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/default.css"/>
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie7.css" />
<![endif]-->

<!--jquery library-->
<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
<!--/jquery library-->

<!--jquery easing-->
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<!--/jquery easing-->

<!--nivo slider plugin for jquery-->
<script type="text/javascript" src="scripts/nivo-slider/jquery.nivo.slider.js"></script>
<link rel="stylesheet" type="text/css" href="scripts/nivo-slider/nivo-slider.css"/>
<!--/ nivo slider plugin for jquery-->

<!--superfish dropdown-->
<link rel="stylesheet" type="text/css" href="scripts/superfish/css/superfish.css"/>
<script type="text/javascript" src="scripts/superfish/js/superfish.js"></script>
<script type="text/javascript" src="scripts/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="scripts/superfish/js/jquery.bgiframe.min.js"></script>
<script type="text/javascript" src="scripts/superfish/js/supersubs.js"></script>
<!--/superfish dropdown-->

<!--auto complete-->
<script type='text/javascript' src='scripts/autocomplete/jquery.autocomplete.min.js'></script>
<link rel="stylesheet" type="text/css" href="scripts/autocomplete/jquery.autocomplete.css" />
<!--/auto complete-->

<!--misc. scripts-->
<script type="text/javascript" src="scripts/scripts.js"></script>
<!--/misc. scripts-->

<!--colorbox-->
<script type="text/javascript" src="scripts/colorbox/colorbox/jquery.colorbox-min.js"></script>
<link rel="stylesheet" type="text/css" href="scripts/colorbox/example1/colorbox.css"/>
<!--/colorbox-->

<script type="text/javascript" src="scripts/jquery.quicksand.js"></script>
<script type="text/javascript">
	function initDynamicStuffs(){
		$('.zoom-icon').each(function(index) {
			var $img = $(this).find("img:first");
			$img.css("margin-top",((parseInt($(this).outerHeight(false))/2)-(parseInt($img.outerHeight(false)))/2)+"px");
		});

		$(".colorbox-image").colorbox(); //initialize colorbox for larger images
		
		$(".colorbox-video").colorbox({iframe:true, width:640, height:480}); //initialize colorbox for video (youtube,vimeo,etc...)
		
		inPageAnimations(); //re init button animations
	}
		
	jQuery(document).ready(function($){

		initDynamicStuffs(); //init dynamic stuffs
		
		/*
		quicskand project categories filtering
		see http://razorjack.net/quicksand/demos/one-set-clone.html
		*/
	
		//clone applications to get a second collection
		var $data = $("#portfolio-content").clone();
		
		$('#sort-by-menu a').click(function(e) {

			$(this).parent().parent().find("a").removeClass("selected");

			//use the rel attribute as the category to filter by.
			var filterClass=$(this).attr("rel");
			
			if (filterClass == 'all') {
				var $filteredData = $data.find('.portfolio-4-column-gallery-quicksand');
			} else {
				var $filteredData = $data.find('.portfolio-4-column-gallery-quicksand[data-type=' + filterClass + ']');
			}
			
			$("#portfolio-content").quicksand($filteredData, {
				duration: 800,
				easing: 'easeInOutQuad'
			}, function(){
				initDynamicStuffs(); //init dynamic stuffs
			});
			
			$(this).addClass("selected");
				
			return false;
		});
	});	
</script>
</head>

<!--body-->
<body>
	<!--sliding login panel-->
	<div id="login_panel">
    	<div id="content">
        	<div>
				<div class="column column1">
	            	<!--help text, maybe-->
                    <h3>And now some Lorem Ipsum to fill the content</h3>
                    <p>
	                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent scelerisque commodo massa. Ut volutpat. Maecenas luctus augue quis velit.
                    </p>
                    <p>
	                    Ut volutpat. Maecenas luctus augue quis velit. Lorem ipsum dolor sit amet, adipiscing elit. Scelerisque commodo massa. 
                    </p>                    
                    <p>
                        <a href="#" class="orange-only notextdecoration">Not a member yet? Sign Up</a>
                    </p>
	            	<!--/help text, maybe-->
                </div>
                                
				<div class="column column2">
	                <!--user signin-->
                    <h3>Member Login</h3>
                    <form name="contact_form" id="contact_form" class="generic-form alignleft_block" action="contact.html">
                        <p>
                            <input type="text" name="txt_name" id="txt_name" class="validate[required] medium-login user margin-right-10" />
                            <input type="text" name="txt_email" id="txt_email" class="validate[required] medium-login password" />
                        </p>
                        <div class="clear10"></div>                                                
                        <p>
                            <input type="checkbox" id="chk_rememberme" name="chk_rememberme" /><label for="chk_rememberme">Remember Me</label>
                            &nbsp;/&nbsp;
                            <a href="#" class="orange-only notextdecoration">Forgot Password?</a>
						</p>                     
                           
                        <div class="clear"></div>
                        
                        <a href="#" class="button alignleft_block bold_only notextdecoration" id="btnLoginNow"><span>Login Now</span></a>

                    </form>
	                <!--/user login-->
                </div>
            </div>
        </div>
    	<div id="signin_register">
            <ul>
                <li>Hello Guest!</li>
                <li><a href="#">&nbsp;</a></li>
            </ul>
    	</div>
    </div>    
    <!--/sliding login panel-->

	<!--top anchor-->
    <a name="top"></a>
    
    <!--body wrapper-->
    <div id="body-wrapper">
    
    	<div id="page-header-wrapper">
    
            <!--header container-->
            <div id="header-contanier">    
            
                <!--header wrapper-->
                <div id="header" class="center-clear">   
                         
                    <!--logo-->
                    <div id="logo">
                        <!--logo here-->
                    </div>
                    <!-- /logo-->
                                
                    <!--header place holder-->
                    <div class="header-place-holder"></div>
                    
                    <!--social tabs-->
                    <ul id="social_tabs">
                        <li><a href="#"><img src="images/social_icons/t.png" width="30" height="27" alt="" /></a></li>
                        <li><a href="#"><img src="images/social_icons/f.png" width="30" height="27" alt="" /></a></li>
                        <li><a href="#"><img src="images/social_icons/o.png" width="30" height="27" alt="" /></a></li>
                        <li><a href="#"><img src="images/social_icons/s.png" width="30" height="27" alt="" /></a></li>
                        <li><a href="#"><img src="images/social_icons/v.png" width="30" height="27" alt="" /></a></li>
                    </ul>
                    <!-- /social tabs-->
                    
                    <!--menu-->
                    <ul id="top_menu" class="sf-menu">
                        <li><a href="index.html">HOME</a><span>Get Started</span></li>
                        <li><a href="all_elements.html">FEATURES</a><span>Skins &amp; Font Stacks</span>
                            <!--first level dropdown menu-->
                            <ul>
                                <li><a href="all_elements.html">Elements</a></li>                                                        
                            </ul>
                            <!--/first level dropdown menu-->                        
                        </li>
                        <li><a href="about.html">PAGES</a><span>Customized Pages</span>
                            <!--first level dropdown menu-->
                            <ul>
                                 <li><a href="about.html">Company Info</a></li>
                                 <li><a href="#">Test Sub Menu</a>
	                                <!--second level dropdown menu-->
                                    <ul>
                                        <li><a href="#">Menu Item #1</a></li>            
                                        <li><a href="#">Menu Item #2</a></li>
                                    </ul>
	                                 <!--/second level dropdown menu-->
                                 </li>
                                 <li><a href="news.html">News &amp; Announcements</a></li>
                                 <li><a href="services.html">Services</a></li>
                                 <li><a href="ourteam.html">Our Team</a></li>
                                 <li><a href="ourpartners.html">Our Partners</a></li>                                 
                                 <li><a href="testimonials.html">Testimonials</a></li>
                                 <li><a href="job.html">Job Opportunities</a></li>
                                 <li><a href="faq.html">FAQ</a></li>
                                 <li><a href="404.html">404 Page Not Found</a></li>                                 
                            </ul>
                            <!--/first level dropdown menu-->                        
                        </li>
                        <li><a href="portfolio_1column.html">PORTFOLIO</a><span>View Our Works</span>
                            <!--first level dropdown menu-->
                            <ul>
								<li><a href="portfolio_4column_gallery_quicksand.php">4 Column Gallery (Quicksand Enabled)</a></li>
                                <li><a href="portfolio_4column_gallery.html">4 Column Gallery</a></li>
                                <li><a href="portfolio_3column_gallery.html">3 Column Gallery</a></li>
                                <li><a href="portfolio_3column_portrait.html">3 Column Portraits</a></li>
                                <li><a href="portfolio_2column_gallery.html">2 Column Gallery</a></li>
                                <li><a href="portfolio_1column.html">1 Column Gallery</a></li>
                                <li><a href="portfolio_1column_portrait.html">1 Column Portraits</a></li>            
                                <li><a href="project-details.html">Portfolio Details</a></li>
							</ul>
                            <!--/first level dropdown menu-->                        
                        </li>
                        <li><a href="blog.html">BLOG</a><span>See Blog Posts</span>
                            <!--first level dropdown menu-->
                            <ul>
                                <li><a href="blog.html">Posts</a></li>
                                <li><a href="blog-post.html">Single Post</a></li>
                            </ul>
                            <!--/first level dropdown menu-->                        
                        </li>                                                                
                        <li><a href="contact.html">CONTACT</a><span>Say Hello!</span></li>           
                    </ul>
                    <!-- /menu-->
                    
                    <!--search box-->
                    <div id="search_box">
                        <form method="post" name="form_search" id="form_search" class="form_search" action="all_elements.html">
                            <input type="text" name="txt_search" id="txt_search" class="txt_search" value="search" />
                            <input type="submit" name="btn_search" id="btn_search" class="btn_search" value="" />
                        </form>
                    </div>
                    <!-- /search box-->
                    
                </div>
                <!-- /header wrapper-->
                
            </div>
            <!-- /header container-->

	        <div class="clear40"></div>
                        
            <!--bread crumb-->
            <div class="center-clear">
                <div id="breadcrumb" class="page-columns-head-style gray-frame">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="portfolio_4column_gallery.html" class="active">4 Column Gallery</a></li>
                    </ul>
                </div>
			</div>                
            <!--/bread crumb-->
            
        </div>
        <!--/page header wrapper-->
   
        <!--page content wrapper-->
        <div id="page-content-wrapper">        
        
            <!--content container-->
            <div class="center-clear page-content-wrapper">
                
                <div class="page-content gray-frame alignleft_block full-content-width-no-right-padding"><!-- <<<---- TAKE ATTENTION TO THIS LINE, USED CSS CLASS DIFFERENT THAN OTHER PAGES -->
                    <!--inner title-->
                    <h1 class="heading h1 alignleft_block">Portfolio</h1>
                    <!--/inner title-->
                    
                    <ul id="sort-by-menu" class="sort-by-menu alignright_block margin-right-22"><!-- <<<---- TAKE ATTENTION TO THIS LINE, ONE MORE CSS CLASS ADDED-->
                    	<li class="alignleft_block first">sort by:</li>
	                    <li class="alignleft_block"><a href="#" class="selected notextdecoration gray-only" rel="all">all</a></li>
                        <li class="alignleft_block"><a href="#" class="notextdecoration gray-only" rel="Web Design">web design</a></li>
                        <li class="alignleft_block"><a href="#" class="notextdecoration gray-only" rel="Graphic Design">graphich design</a></li>
                        <li class="alignleft_block"><a href="#" class="notextdecoration gray-only" rel="Photo">photo</a></li>
                        <li class="alignleft_block"><a href="#" class="notextdecoration gray-only" rel="Printed">printed</a></li>
                        <li class="alignleft_block"><a href="#" class="notextdecoration gray-only" rel="Identity">identity</a></li>
                        <li class="alignleft_block"><a href="#" class="notextdecoration gray-only" rel="Motion">motion</a></li>
                    </ul>     
                    
                    <div class="clear10"></div>
                    <div id="portfolio-content">
					<?php
                    mysql_connect("localhost", "root", "") or die(mysql_error());
                    mysql_select_db("incorporate") or die(mysql_error());

                    $result = mysql_query("SELECT * FROM tbl_gallery_gallery4column where 1=1 limit 20") or die(mysql_error());  
                    
					$i=0;
                    while($row = mysql_fetch_array( $result ))
                    {
                    ?>
                    <!--block-->
                    <div data-id="<?php echo $row["id"] ?>" data-type="<?php echo $row["type"] ?>" class="portfolio-4-column-gallery-quicksand alignleft_block">
                    	
                        <!--main image-->
                        <a href="<?php echo $row["img_large"] ?>" title="<?php echo $row["title"] ?>" class="alignright_block gallerypic <?php echo $row["type"]=="Motion"?"colorbox-video":"colorbox-image" ?>"><img src="<?php echo $row["img"] ?>" width="210" height="148" class="gray-frame padding-5"/><span class="zoom-icon"><img src="images/assets/<?php echo $row["type"]=="Motion"?"play":"enlarge" ?>.png" width="90" height="90" alt=""></span></a>
                        <!--/main image-->
                        
                    	<div class="alignleft_block">
                        	<!--title-->
                            <h3 class="heading h3"><?php echo $row["title"] ?></h3>
							<!--/title-->
                            
                            <!--content-->
                            <p>
								<?php echo $row["body"] ?>                  
                            </p>
							<!--/content-->
                                                        
                            <!--view link-->
                            <a href="project-details.html?id=<?php echo $row["id"] ?>" class="margin_bottom10 gray-link-button">View details</a>
                            <!--/view link-->
                            
                            <!--type icon-->
                            <div class="alignleft_block portfolio-folder-icon">
                            	<?php echo $row["type"] ?>
                            </div>
                            <!--/type icon-->                            
						</div>
                                               
                    </div>
                    <!--/block-->
    	            <?php
                    }
                    ?>                    
					</div>
                    
					<div class="clear10"></div>
                    
                </div>
                
            </div>
            <!-- /content container-->
    	
            <div class="clear40"></div>

        </div>
        <!--/page content wrapper-->

		<!--footer-->
        <div id="footer_container">
            <div id="footer" class="center-clear">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">FEATURES</a></li>
                    <li><a href="#">PAGE</a></li>
                    <li><a href="#" class="active">PORTFOLIO</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
                <div>Copyright 2011 - OzyThemes</div>
            </div>
        </div>
        <!-- /footer-->
    
    </div>
    <!--/body wrapper-->    
</body>
<!-- /body -->

</html>