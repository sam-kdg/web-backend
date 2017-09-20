<?php

$currentPage	=	basename( $_SERVER[ 'PHP_SELF' ] );
$brouwerNummer	=	( isset( $_GET[ 'brouwernr' ] ) ) ? $_GET[ 'brouwernr' ] : 1;

try
{
	$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken

	/* Brouwers ophalen */
	$brouwersQuery	=	'SELECT brouwers.brouwernr, 
						brouwers.brnaam
					FROM brouwers';

	$brouwersStatement	=	$db->prepare( $brouwersQuery );

	$brouwersStatement->execute();

	$brouwers	=	array();

	while( $row = $brouwersStatement->fetch( PDO::FETCH_ASSOC ) )
	{
		$brouwers[ ]	=	$row;
	}

	/* Bieren die bij brouwers horen ophalen */

	$bierenQuery	=	'SELECT bieren.naam
							FROM bieren
							WHERE bieren.brouwernr = :brouwernummer';

	$bierenStatement	=	$db->prepare( $bierenQuery );

	$bierenStatement->bindValue( ':brouwernummer', $brouwerNummer );

	$bierenStatement->execute();

	$bieren	=	array();

	while( $row = $bierenStatement->fetch( PDO::FETCH_ASSOC ) )
	{
		$bieren[ ]	=	$row;
	}

}
catch ( PDOException $e )
{

}
	
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing AJAX basis: deel1</title>
        <link rel="stylesheet" href="table.css">
    </head>
    <body>

		<h1>Oplossing AJAX basis: deel1</h1>

		<form action="<?= $currentPage ?>" method="GET" id="form">
			
			<label for="brouwer">Brouwer: </label>
			<select name="brouwernr" id="brouwer">

				<?php foreach ($brouwers as $brouwer): ?>
					<option value="<?= $brouwer[ 'brouwernr' ] ?>" <?= ( $brouwerNummer === $brouwer[ 'brouwernr' ]) ? 'selected' : '' ?>><?= $brouwer[ 'brnaam' ] ?></option>
				<?php endforeach ?>
				
			</select>

		</form>

		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Bier</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ( $bieren as $key => $bier ): ?>

					<tr class="<?= (( $key + 1 ) % 2 === 0) ? '' : 'odd' ?>">
						
						<td><?= ( $key + 1 ) ?></td>
						<td><?= $bier[ 'naam' ] ?></td>

					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

	<script>

	var form			=	document.getElementById('form');
	var brouwerSelect	=	document.getElementById('brouwer');

	brouwerSelect.addEventListener( 'change', submitForm )

	function submitForm()
	{
		form.submit();
	}

	function loadXMLDoc()
	{
	
	var xmlhttp;
	
	if (window.XMLHttpRequest)
	{
		xmlhttp	=	new XMLHttpRequest();
	}
	

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState === 4 && xmlhttp.status===200 )
		{
			console.log( JSON.parse( xmlhttp.responseText ) );
		}
	}
	xmlhttp.open("GET","oplossing-ajax-basis-deel2-api.php", true);
	xmlhttp.send("test=test");
	}

	loadXMLDoc()

	// http://coreymaynard.com/blog/creating-a-restful-api-with-php/

	</script>

    </body>
</html>