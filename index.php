<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=VT323&display=swap" rel="stylesheet">
    <title>PHP Calculator</title>
</head>
<style>
    <?php include 'index.css'; ?>
</style>
<script type="text/javascript">
    
   <?php include 'index.js'; ?>


</script>

<body>
    
    <div class="main-body">
        
        <div class="calc-frame">
            <div class="heading">
                <h2 class="brand">PHP Calculator  </h2>
                <p class="model">Model 1337</p>
            </div>
            <form method="GET"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <div class="">
               <input type="text" class="calc-screen" name="screen-values" id="calc_screen" value="<?php

//HANDLE HERE
if (isset($_GET['screen-values']))
{
	$string = $_GET['screen-values'];
	$haystackEnd;
	$haystackBegin; 
	while ($haystackEnd = strstr($string, "--")) 
	{
		$haystackBegin = strstr($string, "--", true);
		$string = substr($haystackBegin, 0, strlen($haystackBegin)) . "- " . substr($haystackEnd, 1, strlen($haystackEnd));
	}
	
	if(preg_match('/\/0/',$string,$matches))
	{
		echo "DIV BY ZERO";
	}
	else if(!preg_match("/^(\s*(-?[1-9]\d*(\.\d+)?)|(-?0(\.\d+)?))\s*([\+\-\/\*]\s*((-?[1-9]\d*(\.\d+)?)|(-?0(\.\d+)?))\s*)*$/",$string,$matches))
	{
		echo "Invalid Syntax";
	}
	else
		echo eval("return " . $string. ";");
	
}
else
	echo "0";
?>" >
            </div>
            <div class="calc-buttons">
                 <div class="row">
                    
                  
                    <button type="button" class="special-button" id="seven" onclick="del()">DEL</button >
                    <button type="button" class="special-button" id="eight" onclick="clearScreen()">AC</button>
                    
                </div>
                <div class="row">
                    
                  
                    <button type="button" class="button" id="seven" onclick="addToScreen(this)">7</button >
                    <button type="button" class="button" id="eight" onclick="addToScreen(this)">8</button>
                    <button type="button" class="button" id="nine" onclick="addToScreen(this)">9</button>
                    <button type="button" class="button" id="divide" onclick="addToScreen(this)">/</button>
                </div>
                <div class="row">
                    <button type="button" class="button" id="four" onclick="addToScreen(this)">4</button>
                    <button type="button" class="button" id="five" onclick="addToScreen(this)">5</button>
                    <button type="button" class="button" id="six" onclick="addToScreen(this)">6</button>
                    <button type="button" class="button" id="multiply" onclick="addToScreen(this)">x</button>
                </div>
                <div class="row">
                    <button type="button" class="button" id="one" onclick="addToScreen(this)">1</button>
                    <button type="button" class="button" id="two" onclick="addToScreen(this)">2</button>
                    <button type="button" class="button" id="three" onclick="addToScreen(this)">3</button>
                    <button type="button" class="button" id="minus" onclick="addToScreen(this)">-</button>
                </div>
                <div class="row">
                    <button type="button" class="button" id="zero" onclick="addToScreen(this)">0</button>
                    <button type="button" class="button" id="point" onclick="addToScreen(this)">.</button>
                    <input type="submit" class="button" value="=" id="equal" />
                    <button type="button" class="button" id="add" onclick="addToScreen(this)">+</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>