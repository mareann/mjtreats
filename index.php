<!doctype html>
<!--FILE: index.php
    Maryann Jordan
    2014-2015-->
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>MJ Treats
<?php if (isset($title)) {echo "&#8212;{$title}";} ?>
</title>

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

    <!--              -->
    <!--    Header    -->
    <!--              -->
    <?php include 'includes/header.php'; ?>     
   
    <div class="break"></div> 
    
    <!--             -->
    <!--    MENU     -->
    <!--             -->
    <?php include 'includes/menu.php'; ?>      

  <div class="content">  

    <!-- HTML Credit Code for Can Stock Photo-->
    <!--<a href="http://www.canstockphoto.com" target="_blank"></a>-->
    <img class="picmidright" src="images/dog_treat_box.jpg" alt="dog treat box" width="400" height="400" />
        
      <p> 

        <h4><a href="index.php" target="_blank">MJ Dog Treats</a>
         are made from the finest natural ingredients:</h4>
         <ul>
           <li>Human-Grade ingredients</li>
           <li>100% natural ingredients (no fillers)</li>
           <li>Contains no preservatives, dyes, coloring, sugar or salt.</li>
         </ul>
         
         <!-- HTML Credit Code for Fotolia Photo-->
         <!--<a href="http://www.Fotolia.com">(c) Fotolia</a>-->
         <img src="images/dogpic/dog_lady_floor.jpg" alt="dog paw" width="169" height="113" />         
         <!-- HTML Credit Code for Fotolia Photo-->
         <!--<a href="http://www.Fotolia.com">(c) Fotolia</a>-->
         <img src="images/dogpic/dog_paw.jpg" alt="dog paw" width="112" height="130" />     
         
         <h4>Our treats can be used for all types of uses including special diets:</h4>
         <ul>
           <li><strong>Training Treats</strong> are mini-sized treats in a convenient resealable 
           pouch that is easy to carry in your pocket.<br />
           Teach your dog recall with these tasty treats. With a good recall, there is less
           chance of them being hurt in an accident.
           Help to teach potty training to your pup using the positive reinforcement of giving treats
           when they go outside.
           </li>
           <li><strong>Fun Flavors</strong>, yummy treats to provide variety for your dog.</li>
           <li><strong>Grain-Free or Allergy-Free</strong> are the perfect treats for dogs with diet restrictions.</li>
         </ul>
        
         <!-- HTML Credit Code for Fotolia Photo-->
         <!--<a href="http://www.Fotolia.com">(c) Fotolia</a>-->
         <img src="images/bones2.jpg" alt="2 treats" width="85" height="57" />      
         
        All the training treat varieties were used for training of the American Kennel Club, AKC, 
        Agility Champion Chloe Girl! These treats were designed for champions, 
        our best friends and companions who are champions of our hearts!    

        <!-- HTML Credit Code for Maryann Jordan photo -->
        <img class="picleft" src="images/dogpic/akc_agility.jpg" alt="akc_agility" width="335" height="235" />
      </p> 
      <p>
        Just like home made! 
        Our biscuit treats do not contain any harmful ingredients 
        for your dog, such as: poultry by-product meals, or soy. 
        Oven-baked daily with only natural ingredients for crunchy 
        goodness! They will be begging for more!<br />
      </p>
      
       <div class="break"></div> 
       
      <p>      
         <a href="index.php" target="_blank">MJ Dog Treats</a>
         are available in many tasty flavors and varieties.
         Here are some examples of flavors your companion will love:
         <ul>
           <li>Cheesy Hot Diggity Dog</li>
           <li>Peanut Butter Banana Cookie</li>
           <li>Salmon with Carrots and Oats</li>
           <li>Turkey Apple</li>
         </ul>
      </p>
      
      <p>
        <strong>MADE IN USA with 100% guarantee!</strong>
        If your dog does not enjoy the treats, 
        you will be given a full refund of the purchase price 
        including shipping!
         <!-- HTML Credit Code for Graphicstock -->
         <!--<a href="http://www.Graphicstock.com" (c) Graphicstock </a>-->
         <img class="leftfade" src="images/money_back_red.jpg" alt="moneyback" width="140" height="140" />
      </p>  
      
      <p>Ready to Order? Go to <a href="order.php" target="_blank">Order Page</a>!

  </div>  <!-- content end -->
    
  <div class="break"></div> 
            
  <?php include 'includes/footer.php'; ?>           
      
</body>
</html>