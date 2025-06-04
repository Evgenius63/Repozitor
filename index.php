
<html>
<head>
<meta charset="utf-8">
</head>

<body>
	
	<?php

	set_include_path(get_include_path() . PATH_SEPARATOR . "/path/to/dompdf");

require_once "dompdf_config.inc.php";

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