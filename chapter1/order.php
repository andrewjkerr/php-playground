<html>
	<head>
		<title>Andrew's Widget Corp - Order Results</title>
	</head>
	<body>
		<span style="text-align: center">
			<h1>Andrew's Widget Corp</h1>
			<u><h2>Order Results</h2></u>
			<em style="display: block; margin: 0 auto">Order processed at: <?php date_default_timezone_set("EST"); echo date('H:i, jS F Y');?></em>
			<em><a href="javascript:window.history.back();" style="display: block; margin: 0 auto">Click here to go back to the order page.</a></em>
		</span>
		<br />
		<table border="0" style="display: block; margin: 0 auto">
			<tr bgcolor="#bbb">
				<td width="150px">Item</td>
				<td width="100px" style="text-align: center">Price</td>
				<td width="75px" style="text-align: center">Quantity</td>
			</tr>
			<tr>
				<td>Widgets</td>
				<td align="center"><?php echo '$' . number_format($_POST['widgetqty'] * $_POST['widgetcost'], 2); ?></td>
				<td align="center"><?php echo $_POST['widgetqty']; ?></td>
			</tr>
			<tr>
				<td>Widgets-v2</td>
				<td align="center"><?php echo '$' . number_format($_POST['widget2qty'] * $_POST['widget2cost'], 2); ?></td>
				<td align="center"><?php echo $_POST['widget2qty']; ?></td>
			</tr>
			<tr bgcolor="#eee">
				<td><em>Without tax</em></td>
				<td align="center"><?php echo '$' . number_format((($_POST['widgetqty'] * $_POST['widgetcost']) + ($_POST['widget2qty'] * $_POST['widget2cost'])), 2); ?>
				<td align="center"><?php echo $_POST['widgetqty'] + $_POST['widget2qty']; ?>
			</tr>
			<tr bgcolor="#eee">
				<td><em>With %7 tax</em></td>
				<td align="center"><?php echo '$' . number_format((1.07 * (($_POST['widgetqty'] * $_POST['widgetcost']) + ($_POST['widget2qty'] * $_POST['widget2cost']))), 2); ?>
				<td align="center"><?php echo $_POST['widgetqty'] + $_POST['widget2qty']; ?>
			</tr>
		</table>
		<span style="text-align: center">
			<?php
				/*
				echo '<p>Hmm, file listing... using the backtick.</p>';
				$out = `ls -al`;
				echo '<p>' . $out . '</pre>';
				*/
			?>
		</span>
	</body>
</html>