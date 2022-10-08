<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>

<body>



      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">
			<?php
			    

				
				$numero1 = (rand(0, 10));
				$numero2 = (rand(0, 10));
			
			
			
				$resta = ($numero1 - $numero2);
				$suma = ($numero1 + $numero2);
			
			
				echo ("el primer numero es: " . $numero1);
				echo ("<br/>");
				echo ("el segundo numero es: " . $numero2);
				echo ("<br/>");
				echo ("el resta es: " . $resta);
				echo ("<br/>");
				echo ("el suma es: " . $suma);
			
			
			?>
		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>

    

</body>

</html>