<!DOCTYPE html>
<html>
<head>
	<title>SPOJ ONP</title>
</head>
<body>
	<form action="" method="post">
		<p>Enter the expression: <input type="text" name="s"> <button type="submit">Ok</button></p>
	</form>
	
	<?php 
		$s = $_POST['s'];
		$stk = [];
		$res = "";

		for ( $i=0 ; $i<strlen($s) ; $i++) {
			if($s[$i] == '+' || $s[$i] == '-'|| $s[$i] == '/'|| $s[$i] == '*' || $s[$i] == '^')
			array_unshift($stk, $s[$i]);
			
			else if ($s[$i] == ')') {
				$res = $res.current($stk);
				array_shift($stk);
			}
			
			else if ($s[$i] == '(') {
				
			}
			
			else {
				$res = $res.$s[$i];
			}
		}

		echo $res;
		
	?>

</body>
</html>