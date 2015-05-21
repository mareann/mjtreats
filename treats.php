<!doctype html>

<!--FILE: treats.php
    Maryann Jordan
    2014-2015-->
    
<html>

<head>
<meta charset="utf-8">
<title>MJ Treats</title>

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


<style>

figure {
  float:left;
  border:1px ; 
  padding:.75em; 
}

figure img {
  float:left;
  border:1px solid #666; 
}

figcaption {
  font-weight:bold;
  margin-bottom:1em;
  text-align:center;
/*  float:left;*/	
}

span {
	font-size:1em;
	color:#0A9B4E;
}
</style>

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

    <div id="topTreats" class="info">
            
    <p>
        <!-- HTML Credit Code for Graphicstock -->
        <!--<a href="http://www.Graphicstock.com" (c) Graphicstock </a>-->
        <img src="images/made_in_usa_grunge_stamp.jpg" alt="made in usa" width="150" height="91" />
        <!-- HTML Credit Code for Fotolia Photo-->
        <!--<a href="http://www.Fotolia.com">(c) Fotolia</a>-->
         <img src="images/bones2.jpg" alt="2 treats" width="85" height="57" />
         <p>
          Reward your dog with 
          <a href="index.php" target="_blank">MJ Dog Treats</a>!          
          Our treats have no added salt or sugar!
         </p>

       <h4>We provide four different types of treats:</h4>
         <ul>
           <li><strong>Training Treats</strong> - mini treats designed for training of all kinds</li>
           <li><strong>Fun Flavors</strong> - to provide variety</li>
           <li><strong>Grain Free</strong> - ideal for dogs with food sensitivities.</li>
           <li><strong>Allergy Free</strong> - simple carbohydrates with single protein source ensure no allergy reactions.</li>
         </ul>
    </p>

    </div> <!-- end topTreats-->
        <h1>Training Treats</h1>
      </p>
      <figure>
         <!-- HTML Credit Code for Can Stock Photo-->
         <!--<a href="http://www.canstockphoto.com" target="_blank"></a>-->
	     <img class="figure" src="images/ladydog.jpg" width="385" height="385" alt="ladypicture" />
         
         <figcaption>Use positive reinforcement to train your dog!</figcaption>
      </figure> 
      <p> 
       <div class="break"></div> 
    <div id="trainingTreats" class="info">
      <p>
         Reward your dog with
         <a href="index.php" target="_blank">MJ Dog Treats</a>!
         
         Reward your dog with MJ Dog Treats!  The Training Treats are mini-sized that come in 
         4 oz convenient resealable pouches that are easy to carry in your pocket. 
         They are available in 4 oz ($2.50), 8 oz ($4.00) and money saving 16 oz ($6.50) packages.  
         Here are our 3 irresistible flavors for training your wonderful PUP!<br />

         <ul id="trainingList">
              <li>Salmon Tomato<br />
                  <span>
                  Ingredients: salmon, roma tomatoes, eggs, parsley</span>
              </li>
              <li>Cheez Burger<br />
                  <span>
                  Ingredients: beef, cheese, roma tomatoes</span>
              </li>
              <li>Cheesy Hot Diggity Dog<br />
                  <span>
                  Ingredients: beef, pork, turkey, cheese, roma tomatoes, pickles</span>
              </li>
        </ul>  
      </p>
        
      <div>
        <p>
            By using treats you are providing the dog with a positive motivating factor. 
            When your dog has correctly responded to the command you have given, 
            they are rewarded for that action with a treat. After the command is consistently done by the dog, 
            you no longer need to reward with a treat every time they do the correct action. 
            You can then start rewarding every other time they are correct. When you feel they have learned 
            the action, then reward with a treat randomly.
        </p>
    
      </div>
    
    </div>  <!-- end trainingTreats-->
    
    <p class="info">Ready to Order? Go to <a href="order.php" target="_blank">Order Page</a>!
    <br />
    <a href="#topTreats">Back to top</a> 
    </p>
    
    <div class="info"> 
           
     <p id="funTreats"> 
 
         <!-- HTML Credit Code for Fotolia-->
         <!--<a href="http://www.Fotolia.com">(c) Fotolia</a>-->      
         <img src="images/cupcakes_cookies.jpg" alt="cupcakes_cookies" width="387" height="83" />
            
         <h1>FUN Flavors</h1>    
     </p>
     
    </div> <!--end info-->
    
    <img class="picrightcenter" src="images/hotdogs.jpg" alt="hotdogspicture" width="225" height="180" />
    
    <div class="info">
        These are fun flavors for your wonderful PUP!<br />
        Available in 4 oz ($2.50), 8 oz ($4.00) and money saving 16 oz ($6.50) packages. <br />
        Treat sizes are based on the weight of your dog:
         <span> Large (25-100+ lbs.), 
         Medium (10-25 lbs.), Small (Under 10 lbs.)</span>
 
         <p>
           
            <ul>
             <li>Cheesy Hot Diggity Dog<br />
               <span>Ingredients: beef, pork, turkey, cheese, whole wheat flour, canola oil, honey,roma tomatoes, pickles</span>
             </li>
             <li>Ginger Cupcake<br />
               <span>Ingredients: spelt flour, ginger, honey</span>
             </li>
             <li>Peanut Butter Banana Cookie<br />
               <span>Ingredients: spelt flour, peanut butter, banana, honey</span>
             </li>
             <li>Pizza Wafers<br />
               <span>Ingredients: spelt flour, tomatoes, cheese, parsley</span>
             </li>
             <li>Trio Chicken Beef Fish<br />
               <span>Ingredients: chicken, beef, whitefish, chicken broth, whole wheat flour</span>
             </li>
             <li>Salmon Tomato<br />
               <span>Ingredients: salmon, roma tomatoes, parsley</span>
             </li>            
             <li>Cheez Burger<br />
               <span>Ingredients: beef, cheese, roma tomatoes</span>
             </li>
           </ul>       
 
            Include these YUMMY treats to provide variety for your doggy!

        </p>
      </div> <!--end info-->
      
    <p class="info">Ready to Order? Go to <a href="order.php" target="_blank">Order Page</a>!
    <br />
    <a href="#topTreats">Back to top</a> 
    </p>    
      
    <div class="info">
      
      <p id="grainFreeTreats">
      <h1>Grain Free Treats</h1>
      <!-- HTML Credit Code for Fotolia-->
      <!--<a href="http://www.Fotolia.com">(c) Fotolia</a>-->
      <img class="left" src="images/fish_chicken_meat.jpg" alt="fish_chicken_meat" width="220" height="160" />
    
       These are grain-free and gluten-free treats for your dog.
       Our treats contain 100% natural ingredients (no fillers).
       <br /><br />
       Perfect high protein treat for the very active PUP or larger muscle dog!<br /><br />
       Ideal for dogs with food sensitivities.<br />

       <p>
        Available in 4 oz ($2.50), 8 oz ($4.00) and money saving 16 oz ($6.50) packages. <br />
         Treat sizes are based on the weight of your dog:
         <span> Large (25-100+ lbs.), 
         Medium (10-25 lbs.), Small (Under 10 lbs.)</span>       
       </p>
       </p>  
       <p>
        <ul>
         <li>Whitefish<br />
           <span>Ingredients: whitefish, sweet potato</span>
         </li>                   
         <li>Salmon<br />
           <span>Ingredients: salmon, sweet potato</span>         
         </li>    
         <li>Lamb<br />
          <span>Ingredients: lamb, brown rice</span>
         </li>
         <li>Turkey Apple<br />
           <span>Ingredients: turkey, turkey broth, apples, brown rice, eggs</span>
         </li>
         <li>Cheese<br />
           <span>Ingredients: garbanzo bean flour, cheese, potato flour, pumpkin, carrot, celery, parsley</span>        
         </li>
        </ul>
     </p>
     <p>
       Satisfy your dog with these nutritious and satisfying biscuits.  
       The pure and wholesome ingredients that have been carefully selected for quality
       and nutrition, they are treats you know are SO good for them!
      </p> 
           
    </div> <!--end info-->
     
    <p class="info">Ready to Order? Go to <a href="order.php" target="_blank">Order Page</a>!
    <br />
    <a href="#topTreats">Back to top</a> 
    </p>     
      
    <div class="info">   
      <p id="allergyTreats">
        <h1>Allergy Free Treats</h1>
        
        These are Allergy Free flavors for your wonderful PUP! 
        Simple carbohydrates with single protein source ensure no allergy reactions.
        Absolutely no food additives in our treats!<br />                      
        <p>Available in 4 oz ($2.50), 8 oz ($4.00) and money saving 16 oz ($6.50) packages.</p>

         Treat sizes are based on the weight of your dog:
         <span> Large (25-100+ lbs.), 
         Medium (10-25 lbs.), Small (Under 10 lbs.)</span>
        <ul>
         <li>Whitefish with Sweet Potato<br />
            <span>Ingredients: whitefish, sweet potato</span>
         </li>
         <li>Salmon with Carrots and Oats<br /> 
            <span>Ingredients: salmon, carrots, whole oats</span>
         </li>    
         <li>Lamb with Brown Rice<br />
            <span>Ingredients: lamb, brown rice</span>
         </li>
         <li>Chicken with Oats<br />
            <span>Ingredients: chicken, chicken broth, whole oats</span>
         </li>
        </ul>
      </p> 
      
    </div> <!--end info-->
           
    <p class="info">Ready to Order? Go to <a href="order.php" target="_blank">Order Page</a>!
    <br />
    <a href="#topTreats">Back to top</a> 
    </p>    
    
    </div> <!--end topTreats -->
    
    <div class="break"></div>
             
    <?php include 'includes/footer.php'; ?>      
           
</body>
</html>
