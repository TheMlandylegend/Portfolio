<!doctype html>
    <!--[if lt IE 7 ]>--> <html lang="en" class="ie6"><!-- <![endif]-->
    <!--[if IE 7 ]>    --><html lang="en" class="ie7"><!-- <![endif]-->
    <!--[if IE 8 ]>  -->  <html lang="en" class="ie8"><!-- <![endif]-->
    <!--[if IE 9 ]>  -->  <html lang="en" class="ie9"><!-- <![endif]-->
    <!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src=".//extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src=".//extras/modernizr.2.5.3.min.js"></script>
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="css/basic.css" rel="stylesheet" type="text/css">

	
</head>
	
<body>
	<!-- Start of Landingpage-->
	<section class="intro">
	
		<div class="inner">
<!--	Flipbook-viewport Begin-->
<div class="flipbook-viewport">
<!--    book-zoom begin-->
  <div id="book-zoom" class="container">
<!--      Flipbook begin-->
    <div class="flipbook">
<!--        sj-hard begin-->
      <div  class="sj-hard" style="background-image:url(pages/Cover_page.02.jpg)"></div>
      <div depth="10" class="hard"></div>
<!--
        <div id="page" class="page">
        <div depth="10" class="hard"></div>
              
                  <div class="content">
                  <h4 class="leftSide">Vission 1</h4>
                    <h4 class="rightSide">1</h4>
                    
                      <h4 class="leftSide">About</h4>                      
                      <h4 class="rightSide">2</h4>
                      <h4 class="leftSide">About</h4>
                  </div>
                  
                  
        </div>
-->
      <div id="page" class="page" style="background-image:url(pages/page_0.1.jpg)">
<!--        <div class="pageNumber"> 2 </div>-->
        </div>
      <div depth="5" class="hard"></div>
      <div class="page" style="background-image:url(pages/page_1.0.jpg)">
<!--        <div class="pageNumber"> 4 </div>-->
        </div>
      <div class="hard" depth="5">
        
        </div>
      <div class="page" style="background-image:url(pages/page_2.0.jpg)">
<!--        <div class="pageNumber"> 6 </div>-->
        </div>        
        <div class="hard" depth="5"></div>
        <div class="page">
            <h1 class="headline"> Projects</h1>
            <div class="galllery">
                <a href="http://coralmulticleaning.com/" target="_blank"><img src="pages/CoralMulti.png" style="width:40%; height:50%" title="Coral Multi Cleaning " alt="Coral Multi Cleaning"></a>
                <h4> Coral Multi Cleaning Service</h4>
            </div>
            <div class="gallery"></div>
                 <a href="http://test.mcdeveloper.tech/MCDad/" target="_blank"><img src="pages/MCWeb.png" style="width:40%; height:30%" title="Apt-Art-Photography " alt="Louigene"></a>
                <h4> Mc Dad Louigene</h4>
<!--            <div class="pageNumber"> 8 </div>-->
        </div>
        <div class="hard" depth="5"></div>
        <div class="page">
            
            <h1 class="headline">Contact</h1>
            
        <section class="second">
				
				<div class="contact">
				
		<div class ="contactform">	
			<?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?>
<form id="myform" name="theform" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<span id="formerror" class="error"></span>
            <!--<fieldset>-->
				<input type="text" name="myname" id="myname" title="Please enter your name" autofocus placeholder="Last, First" value="<?php if (isset($myname)) { echo $myname; } ?>" />
				<?php if (isset($err_myname)) { echo $err_myname; } ?>
				<?php if (isset($err_patternmatch)) { echo $err_patternmatch; } ?>

			<!--</fieldset>-->
   <!--         <fieldest>-->
                	<input type="text" name="email" id="email" placeholder="Email Address" autofocus required value="<?php if(isset($email)) {echo $email; } ?>">
		<?php  if (isset($err_email)) {echo $err_email; }?>
		<?Php if (isset($err_pattternemail)) {echo $err_patternemail;}?>
   <!--         </fieldest>-->
			<!--<fieldset class=comment>-->
				<!--<label for="mycomments">Comment: (For faster responses, please enter your phone number.)</label>-->
				<textarea name="mycomments" id="mycomments"><?php if (isset($mycomments)) { echo $mycomments; } ?></textarea>
		<!--</fieldset>-->
		<!--<fieldset>-->
		<button type="submit" name="action" value="submit">Send</button>
		<!--</fieldset>-->
</form>
				</div>
<!--                    Footer-->
                    <?php
							include 'includes/footer.html' ; 					
					?>
<!--                    <div class="pageNumber"> 10 </div>-->
					</div>	            
                		</section>

        
    
    </div>
  </div>
</div>


<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
        //acceleration
			acceleration: false,
        //inclination
        inclination: 10,
			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			//zoom
            zoom: 10,
			// Auto center this flipbook

			autoCenter: true
	});
    $("#zoom-view").bind("zoom.tap", function(event) {
	if ($(this).zoom("value")==1) {
		$(this).zoom("zoomIn", event);
	} else {
		$(this).zoom("zoomOut");
	}
});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['.//lib/turn.js'],
	nope: ['.//lib/turn.html4.min.js'],
	both: ['.//css/basic.css'],
    both: ['.//css/main.css'],
	complete: loadApp
});
        
</script>
			</div>

	
</body>
</html>