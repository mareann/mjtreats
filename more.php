<!doctype html>

<!--FILE: more.php
    Maryann Jordan
    2014-2015 -->
<html>

<head>
<meta charset="utf-8">
<title>More About MJ Treats</title>

<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="stylesheet" href="css/anythingslider.css">

<script src="js/jquery-1.11.1.min.js"></script>

<!-- AnythingSlider 1.9.4 Version November 15, 2013 Released -->
<!-- Anything Slider -->
<script src="js/jquery.anythingslider.min.js"></script>
		

<?php include 'includes/menu_header.php'; ?>
<script type="text/javascript">
$(document).ready(function() {
  $('#menubar').smartmenus({
	        <!-- for submenus to function -->
			subMenusSubOffsetX: 1, 
			subMenusSubOffsetY: -8 
		});
});
</script>

<script>
$(document).ready(function() {
	$('#slider').anythingSlider({
		buildArrows : false,
		autoPlay : true,
		buildStartStop : false,
/*		resizeContents: false,*/
		resizeContents: true	
	});
}); // end ready
</script>


<style>
img.foodpic {
    float:left;
	opacity: 0.6;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

h3 {
	color:#0A9B4E;
}

h4 {
   padding-left:3em;
}

.content {
	position: relative;
	text-align:left;
	text-justify:auto;
    display:block;
	padding:1em 3em 0 3em;
} 

</style>

</head>

<body>
    <?php include 'includes/menu_header.php'; ?>
    <!--              -->
    <!--    Header    -->
    <!--              -->
    <?php include 'includes/header.php'; ?>     
   
    <div class="break"></div> 
    
    <!--             -->
    <!--    MENU     -->
    <!--             -->
    <?php include 'includes/menu.php'; ?> 
      
    <div class="break"></div> 
      
     <div class="info">
        <h1>Best Ingredients</h1>
        <br />
        <!-- HTML Credit Code for Can Stock Photo-->
        <!--<a href="http://www.canstockphoto.com">(c) 
        Can Stock Photo</a>-->
        <img class="foodpic" src="images/chix.jpg" alt="chixpict" width="200" height="200" />
        <img class="foodpic" src="images/fish.jpg" alt="fishpic" width="200" height="200" />
        <img class="foodpic" src="images/eggs.jpg" alt="eggspic" width="200" height="200" /> 

    <div class="break"></div>
     
    <p>
       <h3>
         <a href="index.php" target="_blank">MJ Dog Treats</a>
         are the nutritious diet addition your best friend deserves!
       </h3>
      
       <h4>Local Fresh Ingredients!</h4>
       
       <ul>
        <li>Farm Fresh Eggs</li>
        <li>Organic Peanut Butter</li>
        <li>Vine Grown Tomatoes</li>
        <li>Wild Salmon</li>
        <li>Organic Chicken</li>
        <li>100% Grass Fed USDA Organic Beef</li>
      </ul>

    </p>

    </div> <!--end info-->
 
    <div class="break"></div>
    
    <div class="content">
        
        <p>
        <h3>Savory treats help keep your dogs attention!</h3>
         Your dog can get hurt or lost from distractions. 
         As family members, their health and well-being 
         are our first priority! 
        </p>
        
        <p>
         Years ago I rescued a timid dog from the animal shelter. When I visited the shelter, 
         I noticed that she would wag her tail slightly when someone talked to her in her cage. 
         Because of that I asked to take her out for a walk. Her tail was between her legs and her 
         head was down as I walked her around.   Occasionally she would raise her head slightly 
         when I talked to her, and she would look at me with the sweetest eyes.  It was the end of 
         visitors hour so I went home. But she had captured my heart, so the very first thing I did 
         the next day was adopt her. I found out later from my trainers that she was an Australian Cattle Dog!
        </p>
        <p class="picleft">
          <!--Maryann Jordan images-->
          <img src="images/dogpic/cdog_yellow_ribbon.jpg" alt="Champ Ribbon"/>
        </p>

        <p style="float:right">
         <p>
          Since she was so shy I was determined to socialize her with
          people and other dogs! Every week she would go to one or two
          training classes.
        </p>
          <p>
            <a href="index.php" target="_blank">MJ Dog Treats</a>
             were developed to help with her training. She 
            determined the best recipes!
        
           They were a major reason for her remarkable growth as they were a tangible reinforcement 
           for her as she learned to trust me and others.  The nutritious value was so important as 
           she worked on her training, keeping her mind and body strong and alert.
          </p>
        </p>        
        <p>
         Over time she grew to be a happy confident lady dog. So many people knew her and loved her!  She 
         was my Chloe Girl and she earned many championships and dozens of titles in Rally Obedience and Agility!! 
        </p>       

      </div> <!-- end content -->
      
      <div class="break"></div> 
                              
      <div class="anythingSlider anythingSlider-default activeSlider anythingSlider-hovered"  style="float:left">
        <p>
         Hope you enjoy these pictures of our family dogs keeping their attention with 
         <a href="index.php" target="_blank">MJ Dog Treats</a>!
        </p>
        <div id="slider">
          <!--Maryann Jordan images-->
          <div index="1"><img src="images/dogpic/slide1.jpg" alt="slide1" width="450" height="400"/></div>
          <div index="2"><img src="images/dogpic/slide2.jpg" alt="slide2" width="450" height="400"/></div>
          <div index="3"><img src="images/dogpic/slide3.jpg" alt="slide3" width="450" height="400"/></div>
          <div index="4"><img src="images/dogpic/slide4.jpg" alt="slide4" width="450" height="400"/></div>
          <div index="5"><img src="images/dogpic/slide5.jpg" alt="slide5" width="450" height="400"/></div>
          <div index="6"><img src="images/dogpic/slide6.jpg" alt="slide6" width="450" height="400"/></div>
          <div index="7"><img src="images/dogpic/slide7.jpg" alt="slide7" width="450" height="400"/></div>
          <div index="8"><img src="images/dogpic/slide8.jpg" alt="slide8" width="450" height="400"/></div>
          <div index="9"><img src="images/dogpic/slide9.jpg" alt="slide9" width="450" height="400"/></div>
          <div index="10"><img src="images/dogpic/slide10.jpg" alt="slide10" width="450" height="400"/></div>

        </div> <!--end slider-->     
     </div> <!--end anythingSlider-->

    <div class="break"></div> 
                  
    <?php include 'includes/footer.php'; ?>      
    
</body>
</html>
