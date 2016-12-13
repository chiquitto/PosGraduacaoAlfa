<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DatePiker</title>

	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/moment-with-locales.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.css">

	<script>
		$(function(){
			$("#data").datetimepicker({
				locale: "pt",
				disabledDates:[
				"09/07/2016",
				"09/11/2016"
				]
			});
			$("#data1, #data2").datetimepicker({
				locale: "pt"
			})

			//colocar função no data1 para não selecionar datas anteriores
			$("#data1").on("dp.change", function(e){
				$("#data2").data("DateTimePicker").minDate(e.date);
			});
			$("#data2").on("dp.change",function(e){
				$("#data1").data("DateTimePicker").maxDate(e.date);
			})
		});
	</script>
</head>
<body>
	<div class="container">
		<h1>Date Pickers</h1>
		<div class="form-group">
			<div class='input-group date' id='data'>
				<input type="text" class="form-control">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-calendar	"></i>
				</span>
			</div>
		</div>

		<h1>Check in e Check Out</h1>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<div class='input-group date' id='data1'>
						<input type="text" class="form-control">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-calendar	"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<div class='input-group date' id='data2'>
						<input type="text" class="form-control">
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-calendar	"></i>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>