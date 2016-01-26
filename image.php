<?php
$elemento = $_GET["elemento"];
$signo = $_GET["signo"];
$imagenSigno = imagecreatefrompng('files/img/toshare/s_'.$signo.'.png');
$imagenSimbolo = imagecreatefrompng('files/img/toshare/'.$signo.'.png');
$imagenElemento = imagecreatefrompng('files/img/toshare/e_'.$elemento.'.png');


// Establecer el tipo de contenido
header('Content-Type: image/jpeg');

		// Crear la imagen
		$im = imagecreatetruecolor(600, 315);
		$im = imagecreatefromjpeg("files/img/share_background.jpg");

		// Crear algunos colores
		$crema = imagecolorallocate($im, 246, 231, 195);

			// El texto a dibujar
			// Reemplace la ruta por la de su propia fuente
			$fuente = 'files/fonts/chinesetakeaway-webfont.ttf';
			$texto = "Mi signo zodiacal chino es";
			imagettftext($im, 18, 0, 130, 37, $crema, $fuente, $texto); //Texto Signo
			imagettftext($im, 20, 0, 75, 280, $crema, $fuente, $signo); //Texto Signo
			imagettftext($im, 20, 0, 270, 280, $crema, $fuente, $signo); //Texto Signo
			imagettftext($im, 20, 0, 440, 280, $crema, $fuente, $elemento); //Texto Simbolo

			imagecopy($im, $imagenSigno, 30, 70, 0, 0, 168, 160); // Imagen del Signo
			imagecopy($im, $imagenSimbolo, 220, 70, 0, 0, 168, 160); // Imagen del Simbolo
			imagecopy($im, $imagenElemento, 400, 70, 0, 0, 168, 160); // Imagen de Elemento

// Usar imagepng() resultará en un texto más claro comparado con imagejpeg()
imagejpeg($im, "files/share/".$signo.$elemento.".jpg");

 ?>