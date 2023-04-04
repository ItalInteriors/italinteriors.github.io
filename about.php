<!DOCTYPE html>
<html>
<head>

	<!-- META -->
		<title>Italinteriors</title>

	<meta http-equiv="X-UA-Compatible" content="IE=7, IE=9">
	<meta name="CHARSET" content="UTF-8">
	<meta name="DOCUMENTLANGUAGECODE" content="en" />
	<meta name="DOCUMENTCOUNTRYCODE" content="ca" />
	<meta name="SECURITY" content="Public">
	<meta name="ROBOTS" content="index,follow">
	<meta name="KEYWORDS" content="italinteriors">
	<meta name="DESCRIPTION" content="Italinteriors.ca">
	
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />	
	<!-- CSS-->
	
	<!--//////////////////////////////////////////
	///
	///	StyleSheets
	///
	///////////////////////////////////////////-->
	
	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet" type="text/css" href="style/screen.css" />
	<link rel="stylesheet" type="text/css" href="style/nav.css" />
	<link rel="stylesheet" type="text/css" href="style/social.css" />
	<link rel="stylesheet" type="text/css" href="style/jquery.jscrollpane.css" />
	<!-- jQuery & Javascript -->
	
	<!--//////////////////////////////////////////
	///
	///	jQuery & JavaScript
	///
	///////////////////////////////////////////-->
	
	<!-- jQuery -->
	<script type="text/javascript" src="admin/library/jquery/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="admin/library/jquery/jquery.fancybox-1.3.1.js"></script>
	<script type="text/javascript" src="admin/library/jquery/jquery.slides.min.js"></script>
	<script type="text/javascript" src="admin/library/jquery/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="admin/library/jquery/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="admin/library/jquery/jquery.urlEncode.js"></script>
	
	
		
	
	<!--//////////////////////////////////////////
	///
	///	jQuery Init
	///
	///////////////////////////////////////////-->
	
	<script type="text/javascript">
	
		//OK? Go!
		$(document).ready(function() {
			//Do something
						$('a.popover').fancybox({
				autoDimensions:			false,
				width:					450,
				height:					500,
				hideOnOverlayClick: 	true,
				overlayColor:			'#000000',
				overlayOpacity:			0.5
			});
			
						
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/spinner.gif',
				effect: 'slide',
				crossfade: true,
				slideSpeed: 500,
				fadeSpeed: 350,
				generateNextPrev: false,
				next: 'BTN_next',
				prev: 'BTN_prev',
				generatePagination: false,
				pagination: true,
				paginationClass: 'pagination',
				animationStart: function() {
					$('#caption').html('');
				},
				animationComplete: function(current){
					var current_slide_ID = "#slidenum_" + current;
					var caption = $(current_slide_ID).attr('caption');
					var credit = $(current_slide_ID).attr('credit');
					$('#caption').html(caption + ' ' + '<i>' + credit + '</i>');
				}
			});
			
			//PREV & NEXT BTNS
			$('.BTN_next').hover(function(){
				$(this).fadeTo(100, 100);
			});
			
			$('.BTN_next, .BTN_prev').fadeTo(0, 0);
			$('.BTN_next, .BTN_prev').hover(
			  function () {
			    $(this).fadeTo(250, 1);
			  }, 
			  function () {
			    $(this).fadeTo(250, 0);
			  }
			);

			//Keyboard control
			$(document).focus();
			$(document).keyup(function(event){
				if(event.keyCode == 37){
					//PREV
					//alert('PREV');
					$('#BTN_prev').click();
				}
				if(event.keyCode == 39){
					//NEXT
					$('#BTN_next').click();
				}
			});
			
			
			//Mousewheel handler
			$('#slides').bind('mousewheel', function(event, delta) {
	            var dir = delta > 0 ? 'up' : 'down',
	                vel = Math.abs(delta);
	            //$(this).text(dir + ' at a velocity of ' + vel);
	            if(dir == 'down'){
	            	$('#BTN_next').click();
	            }else if(dir == 'up'){
	            	$('#BTN_prev').click();
	            }
	            return false;
	        });
	        
	        
	        //Init the caption & credit
	        			$('#caption').html(' <i></i>');

		});
	
	</script>
	
	
	<style>
		.pagination {
			width: 200px;
			margin: 0px;
			margin-right: 20px;
			padding: 0px;
			float: left;
		}
		
		.pagination li {
			width: 60px;
			height: 55px;
			margin: 0px;
			margin-right: 10px;
			list-style: none;
			float: left;
		}
		
		.pagination li a {
			display: block;
			width: 60px;
			height: 45px;
			float: left;
		}
		
		.pagination li.current a {
			width: 60px;
			height: 45px;
			border-bottom: 1px solid #1e90c1;
		}
	</style>


</head>

<body>

	<div id="canvas" class="canvas">
		
		<script>
	//OK? Go!
	$(document).ready(function(){

		$('#nav li').hover(
	        function(){
	            $('ul', this).slideDown(0);
	        },
	        function(){
	            $('ul', this).slideUp(0);
	        }
	    );


	    //Handle the Search box
	    $('#search').focus(function(){
	    	if($(this).val() == 'Search'){
	    		$(this).val('');
	    	}
	    });

	    $('#search').blur(function(){
	    	if($(this).val() == ''){
	    		$(this).val('Search');
	    	}
	    });

	    $('#search').keypress(function(e) {
			if(e.which == 13) {
				var encodedQ = encodeURIComponent($(this).val());
				location.href = 'items.php?search=' + encodedQ;
			}
		});

	});
</script>


<style>
	#brands_pipes,  x:-moz-any-link, x:default  { width: 150px; }
</style>


<div id="header" class="header" style="position: relative; z-index: 999999;">

	<a href="index.php">
		<img src="images/IMG_ital_logo.png" alt="Italinteriors" width="130" height="21" style="float: left;" />
	</a>

	<div style="margin-top: 11px; margin-left: 90px; float: right;">

		<ul id="nav" style="z-index: 999999;">

		    <!--
		    <li style="height: 29px;">
		    	<a href="#" class="nav">Brands</a>
		    	<ul style="width: 740px;">
		    		<div id="brands_pipes" class="brands_pipes" style="height: 17px; width: 56px; *width: 58px; background: url(images/TRANS_white_95.png); border-left: 1px solid #666666; border-right: 1px solid #666666; clear: both;"></div>
		    		<div id="brands_blank" class="brands_blank" style="height: 20px; width: 56px; *width: 60px; background: url(images/TRANS_white_95.png); clear: both;"></div>
		            		            	<li><a href="items_cats.php?brand_ID=2" >Boffi</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=3" >Cassina</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=23" >DePadova</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=6" >Flexform</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=14" >Flexform Mood</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=16" >Living Divani</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=15" >Porro</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=1" >Acerbis</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=11" >Riva 1920</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=5" >Fiam</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=7" >Limited Edition</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=19" >Movi</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=4" >Cristian</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=12" >Simon</a></li>
		            		            	<li><a href="items_cats.php?brand_ID=13"  style="border-bottom: 0px;" >Venini</a></li>
		            		            <div style="height: 3px; background: url(images/TRANS_white_95.png); clear: both;"></div>
		        </ul>
		        <div class="clear"></div>
		    </li>

			<li style="height: 29px;"><a href="categories.php" class="nav">Categories</a></li>

		    <li style="height: 29px;"><a href="#" class="nav">Categories</a>
		        <ul style="width: 685px;">
		    		<div style="height: 17px; width: 75px; width: 76px\9; *width: 80px; background: url(images/TRANS_white_95.png); border-left: 1px solid #666666; border-right: 1px solid #666666; clear: both;"></div>
		    		<div style="height: 20px; width: 75px; width: 78px\9; *width: 82px; background: url(images/TRANS_white_95.png); clear: both;"></div>

													<li><a href="items_cats.php?cat_ID=7" >Accessories</a></li>
													<li><a href="items_cats.php?cat_ID=11" >Kitchen Collections</a></li>
													<li><a href="items_cats.php?cat_ID=147" >Bath Collections</a></li>
													<li><a href="items_cats.php?cat_ID=148" >Wardrobe Collections</a></li>
													<li><a href="items_cats.php?cat_ID=72" >Door Systems</a></li>
													<li><a href="items_cats.php?cat_ID=12" >Lighting</a></li>
													<li><a href="items_cats.php?cat_ID=112" >Carpets & Rugs</a></li>
													<li><a href="items_cats.php?cat_ID=10" >Chairs</a></li>
													<li><a href="items_cats.php?cat_ID=153" >Complementary Items</a></li>
													<li><a href="items_cats.php?cat_ID=13" >Lounge</a></li>
													<li><a href="items_cats.php?cat_ID=76" >Night Furniture</a></li>
													<li><a href="items_cats.php?cat_ID=83" >Office Furniture</a></li>
													<li><a href="items_cats.php?cat_ID=90" >Outdoor</a></li>
													<li><a href="items_cats.php?cat_ID=14" >Storage Units</a></li>
													<li><a href="items_cats.php?cat_ID=15"  style="border-bottom: 0px;" >Tables</a></li>
						
		            <div style="height: 3px; background: url(images/TRANS_white_95.png); clear: both;"></div>
		        </ul>
		        <div class="clear"></div>
		    </li>

		    <li style="height: 29px;"><a href="items_projects.php" class="nav">Projects</a></li>

		    <li style="height: 29px;"><a href="items_sale.php" class="nav">Sale</a></li>
		    -->

		    <li style="height: 29px;">
		    	<a href="categories.php" class="nav" style="border-left: 0px !important;">Products</a>
		    </li>

		    <!-- <li style="height: 29px;">
		    	<a href="items_sale.php" class="nav">SALE</a>
		    </li> -->

		    <li style="height: 29px;">
		    	<a href="about.php" class="nav">About Us</a>
		    </li>

		    <li style="height: 29px;">
		    	<a href="contact.php" class="nav">Contact Us</a>
		    </li>

		</ul>

		<div class="clear"></div>

	</div>

	<!--<input type="text" name="search" id="search" style="height: 20px; width: 130px; margin-top: 11px; border: 0px; color: #848484; padding-left: 5px; background: #f4f4f4; float: right;" value="Search" />-->

	<br class="clear" />

</div>
		
		<div style="margin-left: 20px; margin-top: 20px; float: left;">
				
				<div style="position: absolute; *margin-left: -220px; width: 200px; z-index: 3;">
					<div style="height: 30px; color: #215489; border-bottom: 1px dotted #666666;">ABOUT US</div>
					<div style="border-bottom: 1px dotted #666666; line-height: 1.5em; padding-top: 20px; padding-bottom: 20px; margin-bottom: 20px; z-index: 3;">
												
						For more than 35 years, italinteriors has been pioneering modern design in Toronto. The company represents some of the most important manufacturers in contemporary Italian furniture: Cassina, Flexform, Acerbis, Fiam and Boffi Kitchens and Bathrooms. A strong belief in classic design has been the backbone of italinteriors and continues with the new generation that is now leading the showroom with the personal touch and typical Italian flair that distinguishes the business from its competitors.					</div>
				</div>
				
				
				<div id="caption" style="positon: absolute; margin-left: 220px; width: 740px; height: 30px; color: #215489; z-index: 2;"></div>
				
				<div id="slides" style="position: relative; width: 960px; height: 550px; margin-bottom: 20px; overflow: hidden;">
					
					
					
					<ul class="pagination" style="margin-top: 290px;">
										
		   				<li ><a href="about.php#0"><img src="images/uploads/55_10102102_B-195.jpg" width="60" height="40" alt=""></a></li>
		   								
		   				<li ><a href="about.php#1"><img src="images/uploads/56_utrecht_gallery02.jpg" width="60" height="40" alt=""></a></li>
		   								
		   				<li style="margin-right: 0px;" ><a href="about.php#2"><img src="images/uploads/51_Zone&#32;in&#32;Corian&#32;byDuilioBitetto_high.jpg" width="60" height="40" alt=""></a></li>
		   								
		   				<li ><a href="about.php#3"><img src="images/uploads/62_universal&#32;iceland&#32;cut&#32;pipe&#32;byTommasoSartori&#32;high.jpg" width="60" height="40" alt=""></a></li>
		   								
		   				<li ><a href="about.php#4"><img src="images/uploads/64_el_dom_gallery06.jpg" width="60" height="40" alt=""></a></li>
		   								
		   				<li style="margin-right: 0px;" ><a href="about.php#5"><img src="images/uploads/663_temp_home_01.jpg" width="60" height="40" alt=""></a></li>
		   					   			</ul>
		   							
					<div id="BTN_prev" class="BTN_prev" style="position: absolute; top: 0px; left: 220px; z-index: 10; width: 150px; height: 550px; background: url(images/ICON_arrow_left.png) no-repeat center;"><img src="images/shim.png" width="150" height="550" border="0" style="position: relative;" /></div>
					<div class="slides_container" style="width: 740px; height: 550px; overflow: hidden; float: left;">

												
						<div id="slidenum_1" caption="" credit=""><img src="images/uploads/55_10102102_B-195.jpg" width="740" height="550" /></div>
						
												
						<div id="slidenum_2" caption="" credit=""><img src="images/uploads/56_utrecht_gallery02.jpg" width="740" height="550" /></div>
						
												
						<div id="slidenum_3" caption="" credit=""><img src="images/uploads/51_Zone&#32;in&#32;Corian&#32;byDuilioBitetto_high.jpg" width="740" height="550" /></div>
						
												
						<div id="slidenum_4" caption="" credit=""><img src="images/uploads/62_universal&#32;iceland&#32;cut&#32;pipe&#32;byTommasoSartori&#32;high.jpg" width="740" height="550" /></div>
						
												
						<div id="slidenum_5" caption="" credit=""><img src="images/uploads/64_el_dom_gallery06.jpg" width="740" height="550" /></div>
						
												
						<div id="slidenum_6" caption="" credit=""><img src="images/uploads/663_temp_home_01.jpg" width="740" height="550" /></div>
						
										
					</div>
					<div id="BTN_next" class="BTN_next" style="position: absolute; top: 0px; right: 0px; z-index: 10; width: 150px; height: 550px; background: url(images/ICON_arrow_right.png) no-repeat center;"><img src="images/shim.png" width="150" height="550" border="0" style="position: relative;" /></div>

				</div>

		</div>

		<div id="footer" class="footer">
	<div style="width: 960px; margin-top: 21px;">
		
		<div style="border-right: 1px solid #666666; height: 10px; padding-right: 10px; float: left;">
			<a href="http://maps.google.ca/maps?hl=en&q=359+King+Street+East+toronto&ie=UTF8&hq=&hnear=359+King+St+E,+Toronto,+Toronto+Division,+Ontario+M5A+1L1&gl=ca&z=16" target="_blank">359 King Street East</a>
		</div>
		
		<div style="border-right: 1px solid #666666; height: 10px; padding-left: 10px; padding-right: 10px; float: left;">
			<a href="http://maps.google.ca/maps?hl=en&q=359+King+Street+East+toronto&ie=UTF8&hq=&hnear=359+King+St+E,+Toronto,+Toronto+Division,+Ontario+M5A+1L1&gl=ca&z=16" target="_blank">Toronto, Canada M5A 1L1</a>
		</div>
		
		<div style="border-right 1px solid #666666; height: 10px; padding-left: 10px; padding-right: 10px; float: left;">
			T +1 416 366 9540
		</div>
		
		<div style="border-right: 1px solid #666666; height: 10px; padding-left: 10px; padding-right: 10px; float: left;">
			F +1 416 366 4915
		</div>
		
		<div style="height: 10px; padding-left: 10px; float: left;">
			<a href="mailto:info@italinteriors.ca">e: info@italinteriors.ca</a>
		</div>
		
		<div class="social-nav" style="float: right;">
			<a href='https://www.instagram.com/italinteriors/' class='symbol' title='circleinstagram' target="_blank"></a>
			<a href='https://twitter.com/italinteriorsto' class='symbol' title='circletwitterbird' target="_blank"></a>
			<a href='https://www.facebook.com/Italinteriors-299335500160243' class='symbol' title='circlefacebook' target="_blank"></a>
			<a href='https://ca.linkedin.com/in/italinteriors-toronto-63630112b' class='symbol' title='circlelinkedin' target="_blank"></a>
		</div>
		
		<br class="clear" />
		<br /><br />
	</div>
</div>
<br class="clear" />
	</div>

</body>
</html>


























