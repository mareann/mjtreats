<!doctype html>
<!--FILE: order.php
    Maryann Jordan
    2014-2015-->
<html>
<head>
<meta charset="utf-8">
<title>Order</title>

<link rel="stylesheet" type="text/css" href="style/style.css" />

<style>

#order_number {
	position: relative;	
	font-family:'sf_arch_rivalbold',arial;
	font-size:2em;
	text-align:left;
	text-shadow: 2px 2px #7F4C39;	
	color:#0A9B4E;
}

span {
	font-weight:bold;
}

</style>

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

    <?php /*?>    <?php include 'includes/menu_header.php'; ?><?php */?>
    
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
    <h3>OPERATORS ARE STANDING BY FOR YOUR CALL!</h3>
    <!-- Maryann Jordan images-->
    <img class="picmidright" src="images/man_phone.jpg" alt="phone call" width="384" height="288" />
     <div id="order_number">
      Order Phone (555) MJ-Treat
      <br />
     </div>
     <p>
        <h4>Training Treats</h4>
         <ul>
              <li><span>Item #T101</span> Salmon Tomato<br />
              </li>
              <li><span>Item #T102</span> Cheez Burger<br />
              </li>
              <li><span>Item #T103</span> Cheesy Hot Diggity Dog<br />
              </li>
        </ul>  
     </p>
     <p>
        <h4>Fun Flavors Treats</h4>
            <ul>
             <li><span>Item #F201</span> Cheesy Hot Diggity Dog<br />
             </li>
             <li><span>Item #F202</span> Ginger Cupcake<br />
             </li>
             <li><span>Item #F203</span> Peanut Butter Banana Cookie<br />
             </li>
             <li><span>Item #F204</span> Pizza Wafers<br />
             </li>
             <li><span>Item #F205</span> Trio Chicken Beef Fish<br />
             </li>
             <li><span>Item #F206</span> Salmon Tomato<br />
             </li>            
             <li><span>Item #F207</span> Cheez Burger<br />
             </li>
           </ul>       
      </p>
      <p>
        <h4>Grain Free Treats</h4>
        <ul>
          <li><span>Item #G301</span> Whitefish<br />
          </li>                   
          <li><span>Item #G302</span> Salmon<br />
          </li>    
          <li><span>Item #G303</span> Lamb<br />
          </li>
          <li><span>Item #G304</span> Turkey Apple<br />
          </li>
          <li><span>Item #G305</span> Cheese<br />
          </li>
       </ul>
      </p>
      <p>
        <h4>Allergy Free Treats</h4>
        <ul>
          <li><span>Item #A401</span> Whitefish with Sweet Potato<br />
          </li>
          <li><span>Item #A402</span> Salmon with Carrots and Oats<br /> 
          </li>    
          <li><span>Item #A403</span> Lamb with Brown Rice<br />
          </li>
          <li><span>Item #A404</span> Chicken with Oats<br />
          </li>
        </ul>
      </p> 
      <p> 
        All treats are available in packages of:<br />
        &nbsp;&nbsp;4 oz    for <span>$2.50</span><br />
        &nbsp;&nbsp;8 oz    for <span>$4.00</span><br />
                   16 oz    for <span>$6.50 (economy money saving best value size)</span><br />
       <br />
       We only ship to The United States of America due to shipping delays that are possible when shipping outside the country.<br />
       <br />
       Shipping for your purchase is based on the total weight and will be determined when you place your order.<br />
       First Class USPS Shipping is only available up to 12 oz.  After that shipping will be Priority Mail.<br />  
     </p>

   <!--Maryann Jordan images from dog camp -->
   <img src="images/dogpic/cdog_odog_camp.jpg" alt="dog camp" width="408" height="306" />
  
  </div> <!--end info-->
  
  <div class="break"></div>
             
  <?php include 'includes/footer.php'; ?> 
   
</body>
</html>