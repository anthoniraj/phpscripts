<html>
<head>
	<title>Multiplication Table</title>	
	<script language="text/css">
	#content
		{
			font-color: green;
			font-size : 14px;
			
		}
</script>
</head>
<body>
	<div id="content">
		<table border =0>
			<?php
				$n = 6;
				for ($i=1;$i<=10;$i++)
				{
					echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>x</td>";
					echo "<td>$n</td>";
					echo "<td>=</td>";
					echo "<td>".($i*$n)."</td>";															
					echo "</tr>"	;
				}
			?>
		</table>
	</div>
</body>
</html>


