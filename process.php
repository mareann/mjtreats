<!DOCTYPE html>
<!--FILE: process.html
    Maryann Jordan
    2014-2105 -->
<html>

<head>
<meta charset="UTF-8">
<title>MJ Treat Form Processed</title>
<link rel="stylesheet" type="text/css" href="style/style.css" />

<!-- jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>

<?php include 'includes/menu_header.php'; ?>
<script type="text/javascript">
$(function() {
  $('#menubar').smartmenus({
	        <!-- for submenus to function -->
			subMenusSubOffsetX: 1, 
			subMenusSubOffsetY: -8 
		});
});
</script>
</head>

<body>    
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
        
	<div class="content">
        <!-- HTML Credit Code for Graphicstock -->
        <!--<a href="http://www.Graphicstock.com" (c) Graphicstock </a>-->
        <img class="left" src="images/hand_thanks.jpg" width="495" height="320" />
		<div class="info">
            <br />
            <h1>We will contact you soon!</h1>
            <br />
			<h2>Have a great day!</h2>
            <h2>WOOF! WOOF!</h2>		
		</div>
        <p>See you next time!
        
       <!--Maryann Jordan images-->
       <img src="images/dogpic/dog_goodbye.jpg" width="286" height="298" />
       </p>       
	</div>
    

    <div class="break"></div>     
         
    <?php include 'includes/footer.php'; ?>      
 
</body>
</html>
