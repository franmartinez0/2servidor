

<body>

<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

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