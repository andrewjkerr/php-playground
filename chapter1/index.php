<html>
	<head>
		<title>Andrew Kerr's PHP Playground!</title>
		<?php
			define('WIDGETPRICE', number_format(5, 2));
			define('WIDGET2PRICE', number_format(7.50, 2));
		?>
	</head>
	<body>
		<h1 style="text-align:center">Andrew's Widget Corp</h1>
		<form action="order.php" method="POST">
			<table border="0" style="display: block; margin: 0 auto">
				<tr bgcolor="#cccccc">
					<td width="150px">Item</td>
					<td width="100px" style="text-align: center">Price</td>
					<td width="75px" style="text-align: center">Quantity</td>
				</tr>
				<tr>
					<td>Widgets</td>
					<td align="center"><?php echo '$' . WIDGETPRICE; ?><input type="hidden" name="widgetcost" value=<?php echo WIDGETPRICE; ?> /></td>
					<td align="center"><input type="text" name="widgetqty" size="3" maxlength="3" /></td>
				</tr>
				<tr>
					<td>Widgets-v2</td>
					<td align="center"><?php echo '$' . WIDGET2PRICE; ?><input type="hidden" name="widget2cost" value=<?php echo WIDGET2PRICE; ?> /></td>
					<td align="center"><input type="text" name="widget2qty" size="3" maxlength="3" /></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" value="Submit Order"></td>
				</tr>
			</table>
		</form>
	</body>
</html>