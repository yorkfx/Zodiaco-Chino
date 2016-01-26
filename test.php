<?php

		switch (($_GET["year"] - 4) % 12) {
		  case  0: $signoChino = 'Rata';  break;
		  case  1: $signoChino = 'Buey';  break;
		  case  2: $signoChino = 'Tigre';   break;
		  case  3: $signoChino = 'Conejo';  break;
		  case  4: $signoChino = 'Dragon';  break;
		  case  5: $signoChino = 'Serpiente';  break;
		  case  6: $signoChino = 'Caballo';  break;
		  case  7: $signoChino = 'Cabra';  break;
		  case  8: $signoChino = 'Mono';  break;
		  case  9: $signoChino = 'Gallo';  break;
		  case 10: $signoChino = 'Perro';  break;
		  case 11: $signoChino = 'Cerdo';  break;
		 }

		switch (($_GET["year"] - 4) % 12) {
		  case  0: $descpricionSigno = ' La rata es el primer signo del Horóscopo Chino, y no lo es por casualidad, sino porque fue la primera en llegar al casting del Zodiaco chino, y no lo hizo por vivir más cerca del lugar del casting que los demás animales, llego antes que nadie porque fue la más lista y astuta. <br>  Es por esta inteligencia y astucia que la rata es un animal apreciado a nivel simbólico en China, de hecho, en la antigüedad existía la costumbre de representar a los dirigentes o personas cultas al lado de una rata, simbolizando que la persona del dibujo hacía gala de una inteligencia y habilidad fuera de lo común. <br> En cambio en Europa la rata ha sido una especie de animal maldito desde la Edad Media, en gran parte porque fue transmisora de muchas enfermedades mortales como la peste, y también porque tenía la costumbre de entrar en los graneros de los agricultores para comerse los cereales u otros alimentos que allí hubiese. <br> Mucha gente asocia las ratas con las cloacas y cosas así... mientras que su habitat natural siempre fue el campo, donde es un animal tan simpático como puede serlo una ardilla por ejemplo.';  break;
		  case  1: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año del búfalo suelen ser gente tranquila, muy trabajadora y especialmente honestas, un proverbio chino dice algo así como "Nadie es más digno de confianza que un búfalo"; también tienen tendencia a ser tercos y cabezotas, son capaces de desarrollar una enorme fuerza de voluntad y capacidad de trabajo, de tal forma que cuando la aplican en la dirección acertada suelen conquistar el éxito y el reconocimiento, pero cuando lo hacen en el camino del error las consecuencias pueden ser desastrosas y no hay quien les haga cambiar de idea.';  break;
		  case  2: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año del tigre suelen tener mucho carácter y mucha energía, son emprendedoras y les gustan los desafíos... muchas veces esto se traduce en que acaban metiéndose en problemas y situaciones interesantes con más frecuencia que la media de personas, pero no importa, casi siempre salen bien parados, para eso son tigres, para andar dando brincos por la selva. <br>  En China los tigres tienen un papel importante, ya que son uno de los 4 dioses de la mitología china (junto al Dragón, el Pájaro Rojo del Sur y la Tortuga), y así en resumen está asociado con el liderazgo y organización de los asuntos terrenales, es digamos la figura del o de la dirigente que pone orden en sus dominios de una forma sensata pero firme, haciéndose obedecer en todo momento.';   break;
		  case  3: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año del conejo suelen ser muy vivas, en el sentido de ser alegres y tener casi siempre buen humor, se caracterizan porque siempre encuentran una forma de sorprender a la gente que les rodea, ya sea por lo que hagan, por lo que digan o por cualquier cosa de su forma de ser que había pasado desapercibida hasta ese momento. <br> También tienen fama de liantes y de generar enredos y situaciones confusas, pero eso si, siempre divertidas, al menos cuando se ven desde fuera';  break;
		  case  4: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año del dragón son gente especial, de hecho el dragón es el único animal del horóscopo chino que es un ser mitológico y que además vuela por los cielos... <br>Quien quiera saber más de los dragones, lo mejor es que lea la predicción que escribí para el año del Dragón de Agua, ahí lo explico en mucho detalle. <br> Un dragón de agua y otro dragón de fuego jugando sobre las olas';  break;
		  case  5: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año de la serpiente son gente fascinante y misteriosa, su característica más marcada es una profunda inteligencia que es capaz de encontrar caminos y conseguir cosas que para la mayoría de personas parecen imposibles. <br>  Tradicionalmente en China se decía que el signo chino más favorable para una mujer era el ser serpiente, con esto se referían a que al tener que vivir en una sociedad machista donde las mujeres tienen menos oportunidades que los hombres, una serpiente sabría esquivar estos obstáculos y llegar lejos en la vida, consiguiendo la mayoría de las cosas que se propusiese.';  break;
		  case  6: $descpricionSigno = ' Los caballos tienen fama de llamar la atención allá donde van, es un signo asociado a muchos cuentos y leyendas, aventuras, historias de amor y toda suerte de situaciones intensas y sorprendentes. Se dice que la forma más fácil de reconocer a un caballo es porque es alguien que nunca está quieto, siempre tiene las manos ocupadas con algo, son personas muy activas que aparentemente siempre tienen algo que hacer. <br>  También tienen fama de ser muy buenos amantes, se dice que lo más importante para un caballo es la parte sentimental de la vida (incluyendo la parte sexual de manera destacada), en general son gente con mucho carácter, pero a la vez muy sensibles, con tendencia a ser desconfiados con los desconocidos y muy protectores con la gente que realmente aman.';  break;
		  case  7: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año de la cabra son la gente más sensible y con más dotes artísticas de todo el Zoológico Chino, y mi experiencia es que así es, es raro ver una cabra que no tiene al menos algún tipo de aficción como pintar, cantar, escribir o tocar un instrumento musical; casi siempre destacan en este tipo de cosas. <br> En general son gente que aprecian los pequeños placeres de la vida, la estabilidad material... tienen mucha fantasia y a menudo son un poco alocadas e impredecibles, pero como las cabras en el monte, pueden hacer un poco el indio, pero siempre a su manera y sin correr demasiados riesgos, es raro que sean temerarias o imprudentes, en cambio si pueden ser un tanto fantasiosas y lunáticas...';  break;
		  case  8: $descpricionSigno = ' De los monos se dice que son el signo más racional de todo el horóscopo chino, la forma más fácil de reconocerlos es porque acostumbran intentar comprender todo mediante la cabeza, incluso las cosas que no son dadas a ello, y también tienen tendencia a pensar muuucho, a menudo les resulta imposible dejar de dar vueltas a la cabeza. <br> En general son muy certeros razonando las cosas, el único problema les viene cuando intentan buscar una explicación que no existe o no es como les gustaría, o cuando intentan razonar algo que no es dado a ello. <br> Como son tan racionales les cuesta expresar sus sentimientos, y a nivel afectivo tienen que hacer un esfuerzo mayor que la mayoría de la gente por saber llegar a quienes aman, por este motivo se les otorgó el don de la atracción, de tal manera que en general tienen una especie de magnetismo especial que hace que las personas a su alrededor se esfuercen por llegar a ellos a nivel íntimo más que por llegar a otras personas.';  break;
		  case  9: $descpricionSigno = ' El signo del gallo en realidad es uno de los cuatro dioses de la antiguedad china: el pájaro rojo del cielo del Sur, conocido en Japón como Suzaku y en China como Nang Fang Zhu Que (o algo así, mi chino es muy limitado); es un signo asociado a la honestidad y la bondad, a la vez que también a la administración de la justicia, en el sentido de ayudar a quienes son justos y castigar a quienes no lo son. <br> En general son gente seria, muy trabajadora y que saben luchar por conseguir lo que quieren, dan mucha importancia a su familia, tienen muy buen gusto en el vestir y siempre consiguen encontrar un bonito equilibrio en todo lo que hacen, ya sea a la hora de decorar su casa, de escribir una carta o de elejir la ropa para una ocasión especial.';  break;
		  case 10: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año del perro suelen ser honestas y sinceras, detestan las injusticias y tienen un corazón noble que les lleva a luchar (aunque sólo sea de palabra) contra lo que consideran injusto y tiránico. <br> Suelen ser muy buenos amigos (ya lo dice el dicho), siempre dispuestos a ayudar en lo que puedan y a arriesgar su pellejo por la gente que realmente quieren y aprecian. <br> Cuando alguien les traiciona se sienten realmente como un perro apaleado, y esto puede llevarles a amargarse más de lo necesario, tienen que tener cuidado de no dejarse condicionar demasiado por las experiencias desagradables de la vida.';  break;
		  case 11: $descpricionSigno = ' Las personas que nacieron en el '.$_GET["year"].' año del cerdo suelen ser gente con muy buen corazón, de hecho su característica más marcada a menudo es que son demasiado inocentes y tienen tendencia a que la gente se aproveche de ellos... desgraciadamente en el mundo que vivimos a menudo se equipara el ser bueno con el ser tonto, y los cerditos suelen llevarse más palos por este motivo que el resto de los signos, sobre todo tienen que tener cuidado de que no les parasiten y/o manipulen... <br> Por lo demás la mayoría son personas muy encantadoras y agradables, fáciles de tratar y que siempre intentan poner de su parte para que te sientas a gusto. <br>También son muy hogareños, y cuando quieren pueden trabajar muy duro, aunque no es raro ver cerditos apalancados, en general para ellos el "no hacer nada" es una de sus actividades favoritas con la que realmente disfrutan, simplemente tienen que tener cuidado de no abusar de ella!';  break;
		 }

		 $cualElemento = substr($_GET["year"],-1);
		 if ($cualElemento <=1) {
		    $elemento = 'madera';
		} elseif ($cualElemento <= 3) {
		    $elemento = 'agua';
		} elseif ($cualElemento <= 5) {
		    $elemento = 'metal';
		} elseif ($cualElemento <= 7) {
		    $elemento = 'fuego';
		} elseif ($cualElemento <= 9) {
		    $elemento = 'tierra';
		}

		 $descripcionElemento = substr($_GET["year"],-1);
		 if ($descripcionElemento <=1) {
		    $descElemento = ' La energía Madera se identifica con todo lo que hay vivo en la Naturaleza, especialmente el mundo vegetal, su esencia es lo que crece y avanza de manera suave pero constante, lo que es duro y flexible a la vez, también lo que es práctico y sabe encontrar el camino más óptimo para llegar a donde necesita llegar <br>  Representa también los comienzos y las oportunidades, la imaginación y la capacidad de improvisación, como todo el mundo sabe, la madera sirve para muchas cosas, desde hacer papel a hacer muebles, herramientas, barcos, casas, fuego... quienes tienen mucha madera en su carta natal suelen ser personas polifacéticas y con recursos, que son capaces de encontrar soluciones originales a problemas difíciles.';
		} elseif ($cualElemento <= 3) {
		    $descElemento = ' La esencia de la energía Agua es el movimiento constante, la capacidad de adaptarse a cualquier circunstancia y fluir superando los obstáculos, no mediante la violencia sino mediante la constancia y la adaptabilidad. <br> A las personas nos aporta equilibrio y capacidad de adaptación, también tiene que ver con los sentimientos tranquilos y sosegados, con los viajes y con la sexualidad en el sentido de la atracción física. <br> El exceso de agua trae desequilibrios extraños y difíciles de entender, al menos para quienes no tienen mucho de ese elemento! <br> También en la Filosofía China el Agua representa el peligro, en la forma de un profundo desfiladero donde al fondo corre el agua, o como las grandes aguas que tanto aparecen en los texto clásicos, representando el Océano o ríos muy caudalosos (donde no se ve la otra orilla).';
		} elseif ($cualElemento <= 5) {
		    $descElemento = ' La energía Metal epresenta lo frío y tajante, lo racional y eficiente, es el elemento de la cabeza y la intelectualidad. <br> A las personas nos influye potenciando las cualidades intelectuales, quienen tienen mucho Metal en su carta natal suelen ser gente muy inteligente (en el sentido de tener un coeficiente intelectual elevado), también es un elemento que aporta atracción de las otras personas, hace una función de imán, la gente con mucho Metal en su carta natal suele ser atractiva y tener facilidad para llamar la atención y tener admiradores/as. <br>  También es el elemento del dinero y los negocios, así como de todo lo que implique pragmatismo e ideas claras.';
		} elseif ($cualElemento <= 7) {
		    $descElemento = ' La Energía Fuego representa lo que ocurre de repente y es intenso pero no constante en el tiempo, se refiere a las cosas enérgicas, las situaciones peligrosas ante las que hay que reaccionar con rapidez. <br> Las personas en las que predomina el elemento Fuego tienen mucho carácter y se les nota bastante, siendo uno de sus puntos débiles la tendencia a precipitarse y actuar impulsivamente, también el fuego está asociado con los sentimientos intensos y pasionales, con la atracción física y esas cosas. <br> Tiene que ver también con el deporte y el esfuerzo físico, y con las luchas y conflictos, en especial con luchar ardientemente por conseguir lo que uno quiere, también está asociado a la agresividad y falta de diplomacia.';
		} elseif ($cualElemento <= 9) {
		    $descElemento = ' La Tierra es un elemento especial porque contiene a los otros 4 y aparece con mayor frecuencia en las cartas natales (si se hacen muchas se ve esto claramente), su esencia es el equilibrio y lo que está en armonía con su entorno, también la tranquilidad y el no tener prisa, el saber esperar y la sabiduría. <br> En las personas suele tener influencias equilibradoras, aunque si lo hay en demasiado exceso puede llevar a demasiadas paralizaciones o dudas. Tiene también un matiz de saber conseguir las cosas poco a poco y con paciencia, y una vez conseguidas saber conservarlas a lo largo del tiempo. <br> El gran don de esta energía es la Sabiduría de la Naturaleza, hay que saber encontrarla dentro de uno mismo.';
		}

		$referrer = $_SERVER['HTTP_REFERER'];
		if (preg_match("/facebook.com/",$referrer)) {
		      header('Location: index.php');
		} elseif (preg_match("/plus.google.com/",$referrer)) {
		      header('Location: index.php');
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta property="og:title" content="Conoce cual es tu signo en el horoscopo chino!" />
     <meta property="og:image" content="http://dokynweb.com/zchino/files/share/<?php echo strtolower($signoChino); ?><?php echo $elemento ?>.jpg" />
     <meta property="og:url" content="http://dokynweb.com/zchino/test.php?year=<?php echo $_GET["year"];?>"/>
     <meta property="og:description" content="<?php echo $descpricionSigno ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Conoce cual es tu signo en el horoscopo chino!</title>
     <link rel="stylesheet" href="files/css/allv2.css" />
     <link rel="canonical" href="http://dokynweb.com/zchino/promo.jpg" />
</head>
<body>
<h1>Conoce cual es tu signo en el horoscopo chino</h1>
<?php include_once("../publicidad.php") ?>
		<a href="index.php" id="back">Seleccionar otro año</a>

	<div class="container">
		<div class="sec">
			<div>
				<?php
					echo "<h4>Tu simbolo es</h4>";
					echo '<img src="files/img/s_'.strtolower($signoChino).'.png" alt="">';
					echo "<h2> {$signoChino} </h2>";
				?>
			</div>

			<div>

			<?php
			 echo "<h4>Tu signo es</h4>";
			 echo '<img src="files/img/'.strtolower($signoChino).'.png" alt="" data-tooltip="">';
			 echo "<h2> {$signoChino} </h2>";
			?>
			</div>

			<div>
			<?php
			echo "<h4>Tu elemento es</h4>";

			echo '<img src="files/img/elemento_'.$elemento.'.png" alt="" data-tooltip=""> <h2>'.$elemento.'</h2>';
				?>
			</div>
		</div>
	</div>

	<a href="javascript:void();" id="compartir" onclick=" window.open('http://www.facebook.com/sharer.php?u=http://dokynweb.com/zchino/test.php?year=<?php echo $_GET["year"];?>','_blank', 'width=600, height=400');">compartir en facebook</a>
<!-- <img src="files/share/<?php echo strtolower($signoChino); ?><?php echo $elemento ?>.jpg" alt=""> -->
	<div class="cont">
		<div class="sec">

			<div class="sign">
				<h4>Descripcion de <?php echo strtolower($signoChino) ?></h4>
				<p><?php echo $descpricionSigno ?></p>
			</div>
			<div class="simb">
				<h4>Descripcion de <?php echo strtolower($elemento) ?></h4>
				<p><?php echo $descElemento ?></p>
			</div>
		</div>
	</div>
	<br>
	<a href="index.php" id="back">Seleccionar otro año</a>
<br>
<img src="image.php?signo=<?php echo strtolower($signoChino); ?>&elemento=<?php echo $elemento?>" alt="">

<?php include_once("analyticstracking.php") ?>

</body>
</html>