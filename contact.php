<!doctype html>
<!--FILE: contact.php
    Maryann Jordan
    2014-2015 -->
<html>

<head>
<meta charset="utf-8">

<title>Contact MJ Treats</title>

<link rel="stylesheet" type="text/css" href="style/style.css" />

<!-- jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
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

<style>
/*div.form label
{
  font-weight: bold;
  font-size: 0.9em;
  display: block;
}*/

#signup .indent label.error {
  margin-left: 0;
}

#signup label.error {
  font-size: 0.8em;
  color: #F00;
  font-weight: bold;
  display: block;
  margin-left: 215px;
}

#signup  input.error, #signup select.error  {
  background: #FFA9B8;
  border: 1px solid red;
}

#cform {
	background-image:none;
}

form#signup div{
	padding-top:2px;
	padding-bottom:6px;
	padding-left:100px;	
}

form#signup .label {
	display: block;
	clear: left;
	float: left;
	width: 175px;
	text-align: right;
	padding: 7px 15px 0 0;
	text-transform: uppercase;	
	font-weight: bold;	
	color:#0A9B4E; /* dark green */
}

/*form#signup .label {
	width: 200px;	
}*/

form#signup select {
	display: inline-block;
	margin-top: 8px;	
}

form .indent, #submit {
	margin-left: 215px;	
}

form .center {
	text-align:center;
	width:100%;
}

#cformsubmit:hover {
  background-color:#FB051B;
} 

.rightimage {
	float:top;
	float:right;
	width: 30%;
}

.submitText {
	text-transform: uppercase;	
	font-weight: bold;
	color:#0A9B4E; /* dark green */
}
</style>

<script>

$(document).ready(function() {
 $('#signup').validate({
   rules: {
     email: {
        required: true,
        email: true
     },
     FirstName: {
        required: true,
        rangelength:[2,16]
     },
	 LastName: {
        required: true,
        rangelength:[2,16]
     }
   }, //end rules
   messages: {
      email: {
         required: "Please supply an e-mail address.",
         email: "This is not a valid email address."
       },
      FirstName: {
        required: 'Please type a First Name.',
        rangelength: 'First Name must be between 2 and 16 characters long.'
      },
	  LastName: {
        required: 'Please type a Last Name.',
        rangelength: 'Last Name must be between 2 and 16 characters long.'
      }
   },
   errorPlacement: function(error, element) { 
       if ( element.is(":radio") || element.is(":checkbox")) {
          error.appendTo( element.parent()); 
        } else {
		 <!-- error.insertAfter(element);-->
		 	  error.insertBefore(element);
          <!--error.appendTo(element.parent());-->
        } 
    } 

  }); // end validate 
}); // end ready

</script>

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

    <div class="info">
      <h3>Please enter your Contact Information below</h3>
      <p class="submitText">Click the "Submit" after filling out your information.</p>
    </div>
    
    <!--                    -->
    <!--    CONTACT FORM    -->
    <!--                    -->
    <div id="cform" class="wide form">
    
    <!--validate signup -->
	<form action="process.php" method="post" name="signup" id="signup">
       <div style="padding-top:2em">
         <label for="FirstName" class="label">First name:</label>
		 <input name="FirstName" type="text" id="FirstName"><br />
       </div>
       <div>
         <label for="LastName" class="label">Last name:</label>
		 <input name="LastName" type="text" id="LastName"><br />
       </div>
       <div>
		 <label for="email" class="label">E-mail Address:</label>
		 <input name="email" type="text" id="Email"><br />
	   </div>
       <div>
          <label for="ccomment" class="label">Comment:<br />(optional)</label>
          <textarea name="comment" id="ccomment"></textarea>
       </div>
       <div>
        <label for="checkbox" class="label">Receive Specials found in our newletter!</label>
		<input name="newsletter" type="checkbox" id="newsletter">
       </div>   
       <div>
        <br /><input type="submit" value="Submit" id="cformsubmit">
       </div>

       <div class="break"></div>
      
       <div>
        <!-- HTML Credit Code for Graphicstock -->
        <!--<a href="http://www.Graphicstock.com" (c) Graphicstock </a>-->
        <img src="images/keyboard_paw.jpg" alt="paw keyboard" width="591" height="275" />
        <p class="submitText">Thank you for your interest!!</p>
       </div>
    </form>  <!-- end signup --> 
    
    </div>  <!-- end cform --> 
       
    <div class="break"></div> 
        
    <?php include 'includes/footer.php'; ?>           

</body>
</html>
