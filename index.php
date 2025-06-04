
<html>
<head>
<meta charset="utf-8">
</head>

<body>
	
	<?php

	

$dompdf = new DOMPDF();

$html = <<<'ENDHTML'
<html>
 <body>
  <h1>Hello Dompdf</h1>22222222222222
 </body>
</html>
ENDHTML;


$dompdf->render();

$dompdf->stream("hello.pdf");1
?>
		
</body>
</html>