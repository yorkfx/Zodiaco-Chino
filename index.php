<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta property="og:title" content="Conoce cual es tu signo en el horoscopo chino" />
     <meta property="og:image" content="http://dokynweb.com/zchino/promo.jpg" />
     <meta property="og:url" content="http://dokynweb.com/zchino/index.php" rel="canonical" />
     <meta property="og:description" content="Conoce cual es tu signo en el horoscopo chino!" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <title>Conoce cual es tu signo en el horoscopo chino</title>

     <link rel="stylesheet" href="files/css/allv2.css" />
     <link rel="canonical" href="http://dokynweb.com/zchino/promo.jpg" />
</head>
<body>

<h1>Selecciona tu año de nacimiento</h1>

<ul id="years">
	<?php
	for($i = 1925; $i <= 2015; $i++)
	echo "<li><a href=\"test.php?year=$i\">$i</a></li>";
	?>
</ul>
</body>
</html>