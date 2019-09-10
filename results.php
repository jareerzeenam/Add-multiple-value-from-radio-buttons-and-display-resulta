<?php

if(isset($_POST['submit'])){
	
    $who = $_POST['who'];  
    $type = $_POST['type']; 
	$prefer = $_POST['prefer']; 
	$when = $_POST['when'];
    $valuee = $who."".$type."".$prefer."".$when; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- style -->
     

    <title>Results</title>
</head>
<body class="result-bg" onload="displayContent()">

<div class="container">
<div class="row center">
    <input type="text" id="valuecontent" value="<?php echo $valuee; ?>" disabled hidden>
    <br>
    <div id="1BXW" class="hidecontent">
    <p class="category-heading">The Soul Searcher</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
	</div>

	<div id="1BZW" class="hidecontent">
    <p class="category-heading">The Soul Searcher</p>
    <p class="inner-paragraph">
            You travel to explore and find yourself just as much as to explore places. You believe in
            experiencing things, as they are, all by yourself. Whether it’s going on long strolls, getting
            lost amidst stunning sunrise and sunset views or standing over a cliff and staring at the
            wonders of nature; your ultimate goal remains to find your soul.
    </p>
	</div>

<!--  -->
	<div id="2BZW" class="hidecontent">
        <p class="category-heading">The Groupie</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>

	<div id="2BYW" class="hidecontent">
        <p class="category-heading">The Groupie</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>
    
<!--  -->
	<div id="1BYW" class="hidecontent">
        <p class="category-heading">The Island Trotter</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
	</div>

	<div id="2BXW" class="hidecontent">
        <p class="category-heading">The Island Trotter </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>

<!--  -->
	<div id="1AXW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater </p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
	</div>

	<div id="1AYW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>
    
	<div id="1AZW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>
    
	<div id="2AXW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>
    
	<div id="2AYW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
    </div>
    
	<div id="2AZW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
	Blanditiis laudantium itaque adipisci aut quam omnis doloribus.
	Qui ut veniam quos vel labore, in iure officia!
    </p>
	</div>
</div>
</div>

<script src="./js/display.js"></script>
</body>
</html>
