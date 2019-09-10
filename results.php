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
     <link rel="stylesheet" href="./css/style.css">

    <title>Seylan | Results</title>
</head>
<body class="result-bg" onload="displayContent()">

<div class="container">
<div class="row center">
    <input type="text" id="valuecontent" value="<?php echo $valuee; ?>" disabled hidden>
    <br>
    <div id="1BXW" class="hidecontent">
    <p class="category-heading">The Soul Searcher</p>
    <p class="inner-paragraph">
            You travel to explore and find yourself just as much as to explore places. You believe in
            experiencing things, as they are, all by yourself. Whether it’s going on long strolls, getting
            lost amidst stunning sunrise and sunset views or standing over a cliff and staring at the
            wonders of nature; your ultimate goal remains to find your soul.
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
        <p class="inner-paragraph">
            You love being around people and it’s no different when you travel. Whether it’s friends or
            family, you find elation in new destinations and experiences all the more in the company of
            others. You’re the life of the party and you want to make sure everyone enjoys the journey as
            much as you do. There’s simply never a dull moment on your travels.
        </p>
    </div>

	<div id="2BYW" class="hidecontent">
        <p class="category-heading">The Groupie</p>
        <p class="inner-paragraph">
            You love being around people and it’s no different when you travel. Whether it’s friends or
            family, you find elation in new destinations and experiences all the more in the company of
            others. You’re the life of the party and you want to make sure everyone enjoys the journey as
            much as you do. There’s simply never a dull moment on your travels.
        </p>
    </div>
    
<!--  -->
	<div id="1BYW" class="hidecontent">
        <p class="category-heading">The Island Trotter</p>
        <p class="inner-paragraph">
            The phrase “You only live once” doesn’t suit many others better than you. You’re all in for
            adventurous, adrenaline-pumping, thrill-a-minute rides of different proportions and types and
            don’t want your family or friends missing out on any of the fun. You’re daring and brave and
            always one to chip in with your fair share of ideas on things to try at least once in a
            lifetime. After all, YOLO.
        </p>
	</div>

	<div id="2BXW" class="hidecontent">
        <p class="category-heading">The Island Trotter </p>
        <p class="inner-paragraph">
            The phrase “You only live once” doesn’t suit many others better than you. You’re all in for
            adventurous, adrenaline-pumping, thrill-a-minute rides of different proportions and types and
            don’t want your family or friends missing out on any of the fun. You’re daring and brave and
            always one to chip in with your fair share of ideas on things to try at least once in a
            lifetime. After all, YOLO.
        </p>
    </div>

<!--  -->
	<div id="1AXW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater </p>
        <p class="inner-paragraph">
            You’re the traveler looking for a holiday to just soothe your soul and give yourself a
            much-needed break. You can’t wait to get away from the hustle and bustle of the city and the
            stresses of work, and pamper yourself, whether you’re alone or in the company of your loved
            ones. You prefer to stay indoors, relax and rejuvenate in your spell away from the fast-paced
            routine, hence recharging yourself in the process.
        </p>
	</div>

	<div id="1AYW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
        <p class="inner-paragraph">
            You’re the traveler looking for a holiday to just soothe your soul and give yourself a
            much-needed break. You can’t wait to get away from the hustle and bustle of the city and the
            stresses of work, and pamper yourself, whether you’re alone or in the company of your loved
            ones. You prefer to stay indoors, relax and rejuvenate in your spell away from the fast-paced
            routine, hence recharging yourself in the process.
        </p>
    </div>
    
	<div id="1AZW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
        <p class="inner-paragraph">
            You’re the traveler looking for a holiday to just soothe your soul and give yourself a
            much-needed break. You can’t wait to get away from the hustle and bustle of the city and the
            stresses of work, and pamper yourself, whether you’re alone or in the company of your loved
            ones. You prefer to stay indoors, relax and rejuvenate in your spell away from the fast-paced
            routine, hence recharging yourself in the process.
        </p>
    </div>
    
	<div id="2AXW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
        <p class="inner-paragraph">
            You’re the traveler looking for a holiday to just soothe your soul and give yourself a
            much-needed break. You can’t wait to get away from the hustle and bustle of the city and the
            stresses of work, and pamper yourself, whether you’re alone or in the company of your loved
            ones. You prefer to stay indoors, relax and rejuvenate in your spell away from the fast-paced
            routine, hence recharging yourself in the process.
        </p>
    </div>
    
	<div id="2AYW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
        <p class="inner-paragraph">
            You’re the traveler looking for a holiday to just soothe your soul and give yourself a
            much-needed break. You can’t wait to get away from the hustle and bustle of the city and the
            stresses of work, and pamper yourself, whether you’re alone or in the company of your loved
            ones. You prefer to stay indoors, relax and rejuvenate in your spell away from the fast-paced
            routine, hence recharging yourself in the process.
        </p>
    </div>
    
	<div id="2AZW" class="hidecontent">
        <p class="category-heading">The Recharge Retreater</p>
        <p class="inner-paragraph">
            You’re the traveler looking for a holiday to just soothe your soul and give yourself a
            much-needed break. You can’t wait to get away from the hustle and bustle of the city and the
            stresses of work, and pamper yourself, whether you’re alone or in the company of your loved
            ones. You prefer to stay indoors, relax and rejuvenate in your spell away from the fast-paced
            routine, hence recharging yourself in the process.
        </p>
	</div>
</div>
</div>

<script src="./js/display.js"></script>
</body>
</html>