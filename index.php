<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Máy tính</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">

		
	</head>
	<body>
		<h1 class="text-center">Máy tính đơn giản</h1>
		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 ">
					<form name="maytinh">
						<div class="title text-center">Casino</div>
						<table>
							<thead>
								<tr>
									<th colspan="5"><input type="text" name="result" disabled id="result" ></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td><input type="button" value="DEL" onclick="del()" class="clear"></td>
									<td><input type="button" value="AC" onclick="setNull()" class="clear"></td>
								</tr>
								<tr>
									<td><input type="button"value="7" class="number"></td>
									<td><input type="button" value="8" class="number"></td>
									<td><input type="button" value="9" class="number"></td>
									<td><input type="button" value="/" class="tinhtoan"></td>
								</tr>
								<tr>
									<td><input type="button" value="4" class="number"></td>
									<td><input type="button" value="5" class="number"></td>
									<td><input type="button" value="6" class="number"></td>
									<td><input type="button" value="*" class="tinhtoan"></td>
								</tr>
								<tr>
									<td><input type="button" value="1" class="number"></td>
									<td><input type="button" value="2" class="number"></td>
									<td><input type="button" value="3" class="number"></td>
									<td><input type="button" value="-" class="tinhtoan"></td>
								</tr>
								<tr>
									<td><input type="button" value="0" class="number"></td>
									<td><input type="button" value="." class="number"></td>
									<td><input type="button" value="=" onclick="ketqua()" class="ketqua"></td>
									<td><input type="button" value="+" class="tinhtoan"></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>

		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$("input.number").click(function(){
   			 	maytinh.result.value += this.value;
			});
			$("input.tinhtoan").click(function(){
   			 	maytinh.result.value += this.value;
			});

			function del() {
				var result = maytinh.result.value;
				maytinh.result.value = result.substring(0, result.length-1);
			}
			function manhinh() {
				
			}
			function ketqua() {
				var ketquatinh = eval(maytinh.result.value);
				if(maytinh.result.value == ""){
					alert("Null");
				}else{
					maytinh.result.value = ketquatinh;
				}
				
			}
			function setNull() {
				maytinh.result.value = "";
			}

		</script>
	</body>
</html>