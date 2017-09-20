<?php

	function berekenSom( $getal1, $getal2 ) 
	{
	
		$berekening = $getal1 + $getal2;

		return $berekening;
	}

	function vermenigvuldig( $getal1, $getal2 ) 
	{
	
		$berekening = $getal1 * $getal2;

		return $berekening;
	}

	function isEven( $getal1 ) 
	{
	
		if ( $getal1%2 > 0 )
		{
			return false;
		}

		return true;
	}

	function bewerkString( $string ) 
	{
		$resultaatArray['uppercase']	=	strtoupper( $string );
		$resultaatArray['length']		=	strlen( $string );

		return $resultaatArray;
	}
	
	$som 		=	berekenSom( 4, 5 );
	$product 	= 	vermenigvuldig( 4, 5 );

	$getalPariteit 	=	11;
	$pariteit 		=	isEven( $getalPariteit );

	$string 			=	'Vandaag is het sinterklaas';
	$stringResultaat 	=	bewerkString( $string );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Oplossing functies: deel1</title>
	</head>
	<body>

		<h1>Oplossing functies: deel1</h1>

		<p>De som van 4 en 5 is gelijk aan <?php echo $som?></p>
		<p>Het product van 4 en 5 is gelijk aan <?php echo $product?></p>

		<?php if ( $pariteit ): ?>

			<p>De pariteit van het getal <?php echo $getalPariteit ?> is even</p>
		<?php else: ?>

			<p>De pariteit van het getal <?php echo $getalPariteit ?> is oneven</p>
		<?php endif ?>

		<p>De string "<?php echo $string ?>" in hoofdletters <?php echo $stringResultaat['uppercase'] ?> is <?php echo $stringResultaat['length'] ?> karakters lang.<p>

		<ul>
		<?php foreach( $stringResultaat as $key => $value ): ?>
			<li><?php echo $key ?>: <?php echo $value ?></li>
		<?php endforeach ?>
		</ul>


	</body>
</html>